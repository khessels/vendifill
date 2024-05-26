<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $data = $request->session()->all();
        $language = Session::get('language');
        // $language = $request->session()->get('language');
        if(!empty($language) && $language !== App::getLocale()) {
            app()->setLocale($language);
        }
        return $next($request);
    }
}
