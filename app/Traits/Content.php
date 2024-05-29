<?php
namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

trait Content {

    protected $content;
    protected $pages;
    protected $expiration;
    protected $logging_error_timeout;

    public function loadPages(){
        $strapi = config('strapi.enabled', false);
        $locale = App::getLocale();
        $this->logging_error_timeout = (int) config('strapi.error_logging_timeout');
        if(empty($strapi)){
            return;
        }
        $this->expiration = config('content.expiration.default');
        $this->timeout = config('content.logging.error.timeout');

        foreach($this->pages as $index => $page){
            foreach($page['attributes'] as $attribute){
                $redisContent = Redis::get('content.'.App::getLocale().'.'.$index.'.'.$attribute);
                if($redisContent != "DO NOT REQUEST CONTENT"){
                    if(empty($redisContent) ){
                        $response = Http::withToken(config('strapi.token'))->withHeaders(['Accept' => 'application/json', 'Authorization'])->get(config('strapi.url').'/api/' . $attribute . '?locale=' . App::getLocale());
                        $this->content[App::getLocale()][$index][$attribute] = "DO NOT REQUEST CONTENT";
                        if(!empty($response->json())) {
                            $data = $response->json();
                            if($data['data']) {
                                if($data['data']['attributes']) {
                                    $this->content[App::getLocale()][$index][$attribute] = $data['data']['attributes'];
                                    // write resulting array to redis
                                    if(empty($this->expiration )){
                                        Redis::set('content.'.App::getLocale().'.'.$index.'.'.$attribute, json_encode($data['data']['attributes']));
                                    }else{
                                        Redis::set('content.'.App::getLocale().'.'.$index.'.'.$attribute, json_encode($data['data']['attributes']), 'EX', $this->expiration );
                                    }
                                }
                            }else {
                                if(empty($this->expiration )){
                                    Redis::set('content.'.App::getLocale().'.'.$index.'.'.$attribute, "DO NOT REQUEST CONTENT" );
                                }else{
                                    Redis::set('content.'.App::getLocale().'.'.$index.'.'.$attribute, "DO NOT REQUEST CONTENT", 'EX', $this->expiration );
                                }
                                if(empty($this->timeout)) {
                                    Redis::set('content.logging.timeout', 'YES', 'EX', $this->logging_error_timeout);
                                    error_log(json_encode($data));
                                }
                            }
                        }
                    }else{
                        $this->content[App::getLocale()][$index][$attribute] = json_decode($redisContent, true);
                    }
                }
            }
        }
    }
    public function flushContent(Request $request): void
    {
        $this->refreshContent();
    }
    protected function getPageContentAttributes($page){
        $strapi = config('strapi.enabled', false);
        if(empty($strapi)){
            return [];
        }
        if(empty($this->content[App::getLocale()])){
            $this->loadPages();
        }
        return $this->content[App::getLocale()][$page];
    }
    protected function reloadContent(): \Illuminate\Http\JsonResponse
    {
        $this->loadPages();
        return response()->json($this->responseObject(null, true, null, "Content reloaded"));
    }
    protected function refreshContent(): \Illuminate\Http\JsonResponse
    {
        $this->expireContent();
        $this->loadPages();
        return response()->json($this->responseObject(null, true, null, "Content refreshed"));
    }
    public function expireContent($locale = null): \Illuminate\Http\JsonResponse
    {
        if(empty($locale)){
            foreach (config('app.available_locales') as $locale) {
                foreach($this->pages as $index => $page) {
                    foreach ($page['attributes'] as $attribute) {
                        Redis::del('content.' . $locale . '.' . $index . '.' . $attribute);
                    }
                }
            }
        }else{
            foreach($this->pages as $index => $page) {
                foreach ($page['attributes'] as $attribute) {
                    Redis::del('content.' . $locale . '.' . $index . '.' . $attribute);
                }
            }
        }
        return response()->json($this->responseObject(null, true, null, "Content expired"));
    }

}
