<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class ContentCache extends Controller
{
    protected $pages = [
        ['page' => 'welcome', 'attributes' => null],
        ['page' => 'footer', 'attributes' => null]
    ];
    protected $footer = null;
    public function __construct()
    {
        if (App::isLocale('en')) {
            $locale = 'en';
        }else if(App::isLocale('es')){
            $locale = 'es';
        }else{
            App::setLocale('en');
            $locale = 'en';
        }
        foreach($this->pages as $index => $page){
            if( empty( $page['attributes'] ) ){
                $response = Http::strapi()->get('api/' . $page['page'] . '?locale=' . $locale);
                $json = $response->json();
                if(!empty($json['data'])) {
                    $this->pages[$index]['attributes'] = $json['data']['attributes'];
                }else{
                    $this->pages[$index]['attributes'] = null;
                }
            }
        }
        $this->footer = $this->getPageAttributes('footer');
    }

    protected function getPageAttributes( $page ){
        try{
            foreach($this->pages as $_page){
                if( strtolower($_page['page']) === strtolower($page)){
                    //die(json_encode($_page['attributes']));
                    return $_page['attributes'];
                }
            }
            return false;
        }catch(\Exception $e){
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
}
