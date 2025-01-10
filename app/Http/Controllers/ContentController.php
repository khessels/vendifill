<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Lang;

class ContentController extends Controller
{
    public function retrieveContent( Request $request)
    {
        $response = Http::withHeaders([
            'Authentication' => 'bearer ' . config('kcs-content-manager.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'x-app' => config('kcs-content-manager.app')
        ])->get(config('kcs-content-manager.domain') . '/api/management/content');
        $tags = $response->json();
        $items = [];
        foreach( $tags as $tag ) {
            $page = isset( $tag[ 'page']) ? $tag[ 'page'] : '___GENERIC___';
            $items[$tag[ 'language']][ $page][ $tag[ 'key']] = $tag[ 'value' ];
        }
        foreach( $items as $language => $item ) {
            $path = storage_path('app/kcs-content-manager.resources.' . $language );
            file_put_contents( $path, json_encode( $items[ $language]) );
        }
        return 'OK';
    }
    public static function translate( $expression, $content)
    {
        try{
            $content = json_decode( $content, true );
            $page = isset( $expression[ 'page']) ? $expression[ 'page'] : '___GENERIC___';
            if( isset( $content[ $page][ $expression[ 'key']])){
                return $content[ $page][ $expression[ 'key']] ;
            }
            if( isset( $content[ '___GENERIC___'][ $expression[ 'key']])){
                return $content[ '___GENERIC___'][ $expression[ 'key']] ;
            }

            if( Cache::get('kcs-content-manager.engine.collection.enabled')){
                // save tag to expressions cache
                $line =json_encode( ['expression' => $expression, 'page' => $page, 'language' => Lang::locale()]);
                Cache::add('kcs-content-manager.engine.collection', $line, config('kcs-content-manager.expire') );
            }
            if( isset( $expression[ 'default'])){
                return  $expression[ 'default'];
            }
            return  $expression[ 'key'];
        }catch(\Exception $e){
            error_log( $e->getMessage());
        }
    }
    public static function translateEdit( $expression, $content)
    {
        // wrap content in an editor
        $content = self::translate( $expression, $content );
    }
}
