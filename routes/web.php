<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPagesController;
use \App\Http\Controllers\WebPagesController;
use \App\Http\Controllers\UserAuthController;
use \App\Http\Controllers\LanguagesController;
use App\Http\Controllers\TokenizerController;

// display the page in requested browser locale
//$availableLocales = Config::get('app.available_locales');
//$locale = Request::getPreferredLanguage($availableLocales);
//if(App::currentLocale() !== $locale) {
//    if ($locale) App::setLocale($locale);
//}
// todo: check if locale is in query parameters

Route::view('404', 'errors.404');
//Route::view('/', 'index');
// Route::view('/', 'pages.index.guest');

Route::get( '/',                     [GuestPagesController::class,   'index'])          ->name('index');
Route::get( '/login',                [GuestPagesController::class,   'login'])          ->name('login');
Route::get( '/about-us',             [GuestPagesController::class,   'about_us'])       ->name('about-us');

Route::post('/login',                [UserAuthController::class,     'login'])          ->name('post.login');
Route::post('/language/switch',      [LanguagesController::class,    'languageSwitch']) ->name('language.switch');


Route::group(['middleware' => ['auth:sanctum']], function () {
    // your routes here
    Route::get( '/',                    [WebPagesController::class,     'index'])       ->name('index');
    Route::post('/logout',              [UserAuthController::class,     'logout'])      ->name('logout');

    Route::group( ['middleware' => ['can:machines-manage']], function () {
        Route::get('/machines',              [MachineController::class,     'index'])       ->name('machines.index');
        Route::get('/machine/stock',         [MachineController::class,     'stock'])       ->name('machine.stock');
    });

    Route::group( ['middleware' => ['can:machines-config']], function () {
        Route::get('/machine/config', [MachineController::class, 'config'])->name('machine.config');
    });

    Route::group( ['middleware' => ['can:machines-experiment']], function () {
        Route::get('/machine/testing-ground', [MachineController::class, 'testingGround'])->name('machine.testing.ground');
    });

    Route::group( ['middleware' => ['role:developer']], function () {
        Route::get( 'tokenizer',        [TokenizerController::class,        'index'])           ->name('tokenize.index');
        Route::post('tokenize',         [TokenizerController::class,       'tokenize'])         ->name('tokenize.tokenize');
        Route::get( 'tokenize',         [TokenizerController::class,        'retrieveData'])    ->name('tokenize.retrieve');
        Route::get( 'tokenize/card',    [TokenizerController::class,       'retrieveCard'])     ->name('tokenize.card.retrieve');
        Route::post('tokenize/card',    [TokenizerController::class,       'tokenizeCard'])     ->name('tokenize.card');

        Route::get('/info', function () {
            phpinfo();
        });
    });
    //Route::get('machines/manage',    [MachineController::class],       'viewManagement')     ->name('machines.manage');
});



Route::view('/contact', 'pages.contact.default');
Route::view('/about_us', 'pages.about-us.default');
Route::view('/recovery', 'pages.auth.recovery');
Route::view('/signup', 'pages.auth.signup');
Route::view('/terms', 'pages.auth.terms');
Route::view('/services', 'pages.services.default');
Route::view('/services/machines', 'pages.services.machines');
Route::view('/services/products', 'pages.services.products');
Route::view('/faqs', 'pages.faqs.default');
Route::view('/faq', 'pages.faqs.default');
Route::view('/article/request', 'pages.articles.default');

if(config('app.env') === 'local') {
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
    Route::view('/faqs', 'faq');
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
