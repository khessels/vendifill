<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPagesController;
use \App\Http\Controllers\WebPagesController;
use \App\Http\Controllers\UserAuthController;

use App\Http\Controllers\TokenizerController;

// display the page in requested browser locale
//$availableLocales = Config::get('app.available_locales');
//$locale = Request::getPreferredLanguage($availableLocales);
//if(App::currentLocale() !== $locale) {
//    if ($locale) App::setLocale($locale);
//}
// todo: check if locale is in query parameters
Route::middleware( [ 'language', 'web'])->group(function () {
    Route::view( '404', 'errors.404')->name('view.404');
//Route::view('/', 'index');
// Route::view('/', 'pages.index.guest');

    Route::get('/', [GuestPagesController::class, 'index'])->name('view.index');
    Route::get('/login', [GuestPagesController::class, 'login'])->name('login');
//    Route::get('/login', [GuestPagesController::class, 'login'])->name('view.login');
    Route::get('/about-us', [GuestPagesController::class, 'about_us'])->name('view.about-us');
    Route::get('/contact', [GuestPagesController::class, 'contact'])->name('view.contact');
    Route::get('/article/request', [GuestPagesController::class, 'articleRequest'])->name('view.article.request');
    Route::get('/services', [GuestPagesController::class, 'services'])->name('view.services');
    Route::get('/services/machines', [GuestPagesController::class, 'machines'])->name('view.services.machines');
    Route::get('/services/refill', [GuestPagesController::class, 'refill'])->name('view.services.refill');
    Route::get('/faqs', [GuestPagesController::class, 'faqs'])->name('view.faqs');
    Route::post('/login', [UserAuthController::class, 'login'])->name('post.login');
    Route::get('/red-button', [GuestPagesController::class, 'redButton'])->name('view.red-button');
    Route::get('/terms', [GuestPagesController::class, 'terms'])->name('view.terms');
    Route::get('/profile', [WebPagesController::class, 'profile'])->name('view.profile');
    Route::get('/signup', [GuestPagesController::class, 'signup'])->name('view.signup');

    Route::group(['middleware' => ['auth:sanctum']], function () {
        // your routes here
        //Route::get( '/',                    [WebPagesController::class,     'index'])       ->name('index');
        Route::post('/switch-menu', [DeveloperController::class, 'switchMenu'])->name('menu.switch');
        Route::post('/logout', [UserAuthController::class, 'logout'])->name('post.logout');

        Route::group(['middleware' => ['can:locations-manage']], function () {
            Route::get('/locations', [LocationController::class, 'index'])->name('view.locations.index');
            Route::post('/locations', [LocationController::class, 'store']);
        });
        Route::group(['middleware' => ['can:outlets-manage']], function () {
            Route::get('/outlets', [OutletController::class, 'index'])->name('view.outlet.index');
            Route::post('/outlets', [OutletController::class, 'store']);
        });

        Route::group(['middleware' => ['can:machines-manage']], function () {
            Route::get('/machines', [MachineController::class, 'index'])->name('view.machines.index');
            Route::post('/machines', [MachineController::class, 'store']);
            Route::get('/machine/stock/{uuid}', [MachineController::class, 'stock'])->name('view.machine.stock');
        });

        Route::group(['middleware' => ['can:products-manage']], function () {
            Route::get('/products', [ProductController::class, 'index'])->name('view.products.index');
            Route::post('/products', [ProductController::class, 'store']);
        });

        Route::group(['middleware' => ['can:machines-config']], function () {
            Route::get('/machine/config', [MachineController::class, 'config'])->name('view.machine.config');
        });

        Route::group(['middleware' => ['can:machines-experiment']], function () {
            Route::get('/machine/testing-ground', [MachineController::class, 'testingGround'])->name('view.machine.testing.ground');
        });

        Route::group(['middleware' => ['role:developer|admin']], function () {
            Route::get('tokenizer', [TokenizerController::class, 'index'])->name('view.tokenize.index');
            Route::post('tokenize', [TokenizerController::class, 'tokenize'])->name('post.tokenize.tokenize');
            Route::get('tokenize', [TokenizerController::class, 'retrieveData'])->name('get.tokenize.retrieve');
            Route::get('tokenize/card', [TokenizerController::class, 'retrieveCard'])->name('get.tokenize.card.retrieve');
            Route::post('tokenize/card', [TokenizerController::class, 'tokenizeCard'])->name('post.tokenize.card');
            Route::get('developer/settings', [DeveloperController::class, 'settings'])->name('view.developer.settings');
            Route::get('developer/machine/vending', [DeveloperController::class, 'vendingMachine'])->name('view.developer.machine.vending');
            Route::get('info', function () {
                phpinfo();
            })->name('view.phpinfo');
        });
        //Route::get('machines/manage',    [MachineController::class],       'viewManagement')     ->name('machines.manage');
    });



//Route::view('/contact', 'pages.contact.default')->name('view.contact');
//Route::view('/about_us', 'pages.about-us.default');
Route::view('/recovery', 'pages.auth.recovery');

    if (config('app.env') === 'local') {
        Route::view('/old/index', 'index');
        Route::view('/old/login', 'login');
        Route::view('/old/about_us', 'about_us');
        Route::view('/index_2', 'index_2');
        Route::view('/index_3', 'index_3');
        Route::view('/account', 'account');
        Route::view('/blog', 'blog');
        Route::view('/blog/details', 'blog_details');
        Route::view('/cart/checkout', 'cart_checkout');
        Route::view('/old/contact', 'contact');
        Route::view('/element/accordions', 'elements-accordions');
        Route::view('/element/alerts', 'elements-alerts');
        Route::view('/element/counters', 'elements-counters');
        Route::view('/element/form', 'elements-form');
        Route::view('/element/icons', 'elements-icons');
        Route::view('/element/tables/info', 'elements-tables_info');
        Route::view('/element/tables/pricing', 'elements-tables_pricing');
        Route::view('/element/embeds/media', 'elements-media_embeds');

        Route::view('/element/tabs', 'elements-tabs');
        //Route::view('/faqs', 'faq');
        Route::view('/gallery/classic', 'gallery_classic');
        Route::view('/gallery/masonry', 'gallery_masonry');

        Route::view('/old/products', 'products');
        Route::view('/product/details', 'product_details');
        Route::view('/product/single', 'product_single');

        Route::view('/old/services', 'services');
        Route::view('/catalog/shop', 'catalog_shop');
        Route::view('/typography', 'typography');

        Route::get('/info', function () {
            phpinfo();
        });
    }
//Route::get('/', [GuestPagesController::class, 'index'])->name('index');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

//require __DIR__.'/auth.php';
});
