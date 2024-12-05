<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redis;

class ContentController extends Controller
{
    public static function translate( $expression)
    {
        $key = $expression[ 'key'];
        if( isset( $expression[ 'page'])) {
            $key .= '.' . $expression[ 'page'];
        }
        if(! isset( $expression[ 'language'])) {
            $key .= '.' . Lang::locale();
        }
        $value = Redis::get( $key);
        if ( $value === false) {
            // todo: send the expression to the content manager
            $response = Http::withHeaders([
                'Authentication' => 'bearer ' . config( 'kcs-content-manager.token' ),
                'x-app' => config( 'kcs-content-manager.app' ),
                'Content-Type' => 'application/json',
                'Accept' => 'application/json' ])
            ->post( 'http://kcs-content-manager.local/api/management/content/' . Lang::locale(), $expression);

            return ! isset( $expression[ 'default']) ? $expression[ 'key'] : $expression[ 'default'];
        }
        return $value;
    }
}
