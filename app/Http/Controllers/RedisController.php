<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
//use App\Traits\Content;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //use Content;
    public function ping(Request $request)
    {
        try {
            Redis::set('ping', 'pong');
            return response()->json( Redis::get('ping'));
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            $this->alertNotification($e->getMessage(), 'error');
            return response( $e->getMessage(), 400);
        }
    }

    public function test_ttl(Request $request)
    {
        try {
            Redis::set('test', 'test_ttl_failed', 'EX', 2);
            sleep(4);
            return response()->json( Redis::get('test'));
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            return response( $e->getMessage(), 400);
        }
    }
}
