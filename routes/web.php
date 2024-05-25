<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPagesController;

// display the page in requested browser locale
//$availableLocales = Config::get('app.available_locales');
//$locale = Request::getPreferredLanguage($availableLocales);
//if(App::currentLocale() !== $locale) {
//    if ($locale) App::setLocale($locale);
//}
// todo: check if locale is in query parameters

//Route::view('404', 'errors.404');
//Route::view('/', 'index');
// Route::view('/', 'pages.index.guest');
Route::post('/language/switch',[\App\Http\Controllers\LanguagesController:: class, 'languageSwitch'])->name('language.switch');
Route::group(['middleware' => ['web']], function () {
    // your routes here
    Route::get('/',[\App\Http\Controllers\WebPagesController:: class, 'index'])->name('index');
    Route::get('/logout',[\App\Http\Controllers\UserAuthController:: class, 'logout'])->name('logout');
});


Route::get('/',[\App\Http\Controllers\GuestPagesController:: class, 'index'])->name('index');
Route::get('/about-us',[\App\Http\Controllers\GuestPagesController:: class, 'about_us'])->name('about-us');
Route::get('/login',[\App\Http\Controllers\GuestPagesController:: class, 'login'])->name('login');



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
Route::get('/english', function () {
    redirect()->back();
})->name('english');
Route::get('/espanol', function () {
    redirect()->back();
})->name('espanol');

//Route::get('/', [GuestPagesController::class, 'index'])->name('index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
