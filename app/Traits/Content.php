<?php
namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;

trait Content {
    protected $locale;
    protected $content;
    protected $pages;
    protected $expiration;
    protected $logging_error_timeout;

    public function loadLocale(){
        if (App::isLocale('en')) {
            $this->locale = 'en';
        }else if(App::isLocale('es')){
            $this->locale = 'es';
        }else{
            App::setLocale('en');
            $this->locale = 'en';
        }
        $this->expiration = config('content.expiration.default');
        $this->logging_error_timeout = config('content.logging.error.timeout');
    }
    public function loadPages(){
        foreach($this->pages as $index => $page){
            foreach($page['attributes'] as $attribute){
                // load from redis
                $redisContent = Redis::get('content.'.$this->locale.'.'.$index.'.'.$attribute);
                if($redisContent != "DO NOT REQUEST CONTENT"){
                    if(empty($redisContent) ){
                        $response = Http::strapi()->get('api/' . $attribute . '?locale=' . $this->locale);
                        $this->content[$this->locale][$index][$attribute] = "DO NOT REQUEST CONTENT";
                        if(!empty($response->json())) {
                            $data = $response->json();
                            if($data['data']) {
                                if($data['data']['attributes']) {
                                    $this->content[$this->locale][$index][$attribute] = $data['data']['attributes'];
                                    // write resulting array to redis
                                    if(empty($this->expiration )){
                                        Redis::set('content.'.$this->locale.'.'.$index.'.'.$attribute, json_encode($data['data']['attributes']));
                                    }else{
                                        Redis::set('content.'.$this->locale.'.'.$index.'.'.$attribute, json_encode($data['data']['attributes']), 'EX', $this->expiration );
                                    }
                                }
                            }else {
                                if(empty($this->expiration )){
                                    Redis::set('content.'.$this->locale.'.'.$index.'.'.$attribute, "DO NOT REQUEST CONTENT" );
                                }else{
                                    Redis::set('content.'.$this->locale.'.'.$index.'.'.$attribute, "DO NOT REQUEST CONTENT", 'EX', $this->expiration );
                                }
                                if(empty($this->logging_error_timeout)) {
                                    error_log(json_encode($data));
                                    Redis::set('content.logging.timeout', 'YES', 'EX', $this->logging_error_timeout);
                                }
                            }
                        }
                    }else{
                        $this->content[$this->locale][$index][$attribute] = json_decode($redisContent, true);
                    }
                }
            }
        }
    }
    protected function getPageContentAttributes($page){
        return $this->content[$this->locale][$page];
    }
    protected function reloadContent(){
        $this->loadPages();
        return true;
    }
    public function expireContent(){
        foreach($this->pages as $index => $page) {
            foreach ($page['attributes'] as $attribute) {
                Redis::del('content.'.$this->locale.'.'.$index.'.'.$attribute);
            }
        }
    }
}
