<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /*
    determine which language out of an available set the user prefers most

    $available_languages        array with language-tag-strings (must be lowercase) that are available
    $http_accept_language    a HTTP_ACCEPT_LANGUAGE string (read from $_SERVER['HTTP_ACCEPT_LANGUAGE'] if left out)
*/
    function preferredLanguage ($available_languages,$http_accept_language="auto") {
        // if $http_accept_language was left out, read it from the HTTP-Header
        if ($http_accept_language == "auto") $http_accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';

        // standard  for HTTP_ACCEPT_LANGUAGE is defined under
        // http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4
        // pattern to find is therefore something like this:
        //    1#( language-range [ ";" "q" "=" qvalue ] )
        // where:
        //    language-range  = ( ( 1*8ALPHA *( "-" 1*8ALPHA ) ) | "*" )
        //    qvalue         = ( "0" [ "." 0*3DIGIT ] )
        //            | ( "1" [ "." 0*3("0") ] )
        preg_match_all("/([[:alpha:]]{1,8})(-([[:alpha:]|-]{1,8}))?" .
            "(\s*;\s*q\s*=\s*(1\.0{0,3}|0\.\d{0,3}))?\s*(,|$)/i",
            $http_accept_language, $hits, PREG_SET_ORDER);

        // default language (in case of no hits) is the first in the array
        $bestlang = $available_languages[0];
        $bestqval = 0;

        foreach ($hits as $arr) {
            // read data from the array of this hit
            $langprefix = strtolower ($arr[1]);
            if (!empty($arr[3])) {
                $langrange = strtolower ($arr[3]);
                $language = $langprefix . "-" . $langrange;
            }
            else $language = $langprefix;
            $qvalue = 1.0;
            if (!empty($arr[5])) $qvalue = floatval($arr[5]);

            // find q-maximal language
            if (in_array($language,$available_languages) && ($qvalue > $bestqval)) {
                $bestlang = $language;
                $bestqval = $qvalue;
            }
            // if no direct hit, try the prefix only but decrease q-value by 10% (as http_negotiate_language does)
            else if (in_array($langprefix,$available_languages) && (($qvalue*0.9) > $bestqval)) {
                $bestlang = $langprefix;
                $bestqval = $qvalue*0.9;
            }
        }
        return $bestlang;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cms = empty( session('cms.enable')) ? false : true;
        view()->share('cms', $cms);

        $isNewSession = request()->cookie(session()->getName()) === null;
        if( $isNewSession ) {
            if( empty( Session::get('language'))) {
                $lang = $this->preferredLanguage( config('app.available_locales'), $_SERVER['HTTP_ACCEPT_LANGUAGE']);
                Session::put('language', $lang);
            }
        }
        $language = Session::get('language');
        if( ! empty( $language) && $language !== App::getLocale()) {
            app()->setLocale( $language);
        }

        $lang = Lang::locale();
        $a = Storage::disk('resources')->get( $lang);
        if( ! empty( $a)){
            $a = unserialize( $a);
        }else{
            $a = [];
        }
        $b = Storage::disk('resources')->get( 'language-generic');
        if( ! empty( $b)){
            $b = unserialize( $b);
        }else{
            $b = [];
        }
        $content = array_merge( $a, $b);
        Cache::set('content', $content);

        return $next( $request);
    }
}
