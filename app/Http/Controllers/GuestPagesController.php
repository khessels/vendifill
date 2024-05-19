<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;

class GuestPagesController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer','head','top-bar','side-menu']];
        $this->pages['about-us']    = ['attributes' => ['about-us', 'footer','head','top-bar','side-menu']];
        $this->pages['contact']     = ['attributes' => ['contact', 'footer','head','top-bar','side-menu']];

        // load the pages and partials
        $this->setLocale();
        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            error_log('Hello');
            $content = $this->getPageContentAttributes('welcome');
            return view('pages.index.guest')->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function about_us(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $content = $this->getPageContentAttributes('about-us');
            return view('pages.about-us.default')->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function contact(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $content = $this->getPageContentAttributes('contact');
            return view('pages.contact.default')->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }


}
