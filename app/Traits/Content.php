<?php
namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

trait Content {
    protected $locale;
    protected $content;
    protected $pages;
    protected $contentError = false;
    public function setLocale(){
        if (App::isLocale('en')) {
            $this->locale = 'en';
        }else if(App::isLocale('es')){
            $this->locale = 'es';
        }else{
            App::setLocale('en');
            $this->locale = 'en';
        }
    }
    public function loadPages(){
        foreach($this->pages as $index => $page){
            foreach($page['attributes'] as $attribute){
                // load from redis
                if(empty($this->content[$index][$attribute])) {
                    $response = Http::strapi()->get('api/' . $attribute . '?locale=' . $this->locale);
                    $this->content[$index][$attribute] = null;
                    if(!empty($response->json())) {
                        $data = $response->json();
                        $this->contentError = $data;
                        $this->content[$index][$attribute] = null;
                        if($data['data']) {
                            if($data['data']['attributes']) {
                                $this->content[$index][$attribute] = $data['data']['attributes'];
                                $this->contentError = false;
                                // write resulting array to redis
                            }
                        }else {
                            error_log("Hello dolly");
                            error_log(json_encode($data));
                        }
                    }
                }
            }
        }
    }
    protected function getPageContentAttributes($page){
        return $this->content[$page];
    }
    protected function reloadContent($page){
        return true;
    }
}
