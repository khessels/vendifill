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
        $redisKey = $expression[ 'key'];
        if( isset( $expression[ 'page'])) {
            $redisKey .= '.' . $expression[ 'page'];
        }
        if(! isset( $expression[ 'language'])) {
            $redisKey .= '.' . Lang::locale();
            $expression[ 'language'] = Lang::locale();
        }

        $value = Redis::get( config( 'kcs-content-manager.app' ) . '.' . $redisKey);
        if ( $value === false || $value === null) {
            $response = Http::withHeaders([
                'Authentication' => 'bearer ' . config( 'kcs-content-manager.token' ),
                'x-dev' => config( 'kcs-content-manager.dev'),
                'x-app' => config( 'kcs-content-manager.app' ),
                'Content-Type' => 'application/json',
                'Accept' => 'application/json' ])
            ->post( 'http://kcs-content-manager.local/api/management/content/' . Lang::locale(), $expression);

            return ! isset( $expression[ 'default']) ? $expression[ 'key'] : $expression[ 'default'];
        }
        return $value;
    }
}
