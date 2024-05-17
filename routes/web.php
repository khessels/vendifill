<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPagesController;

// display the page in requested browser locale
$availableLocales = Config::get('app.available_locales');
$locale = Request::getPreferredLanguage($availableLocales);
if(App::currentLocale() !== $locale) {
    if ($locale) App::setLocale($locale);
}
// todo: check if locale is in query parameters

<<<<<<< HEAD
Route::view('404', '404');
Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/about_us', 'about_us');
Route::view('/index_2', 'index_2');
Route::view('/index_3', 'index_3');
Route::view('/account', 'account');
Route::view('/blog', 'blog');
Route::view('/blog/details', 'blog_details');
Route::view('/cart/checkout', 'cart_checkout');
Route::view('/contact', 'contact');
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

Route::view('/products', 'products');
Route::view('/product/details', 'product_details');
Route::view('/product/single', 'product_single');

Route::view('/services', 'services');
Route::view('/catalog/shop', 'catalog_shop');
Route::view('/typography', 'typography');
=======
Route::get('/info', function () {
    phpinfo();
});
Route::post('/english', function () {
    redirect('/');
})->name('english');
Route::get('/espanol', function () {
    redirect('/');
})->name('espanol');


Route::get('/', [PublicPagesController::class, 'index'])->name('index');
>>>>>>> d80a6fb1c708b184695aa3ab8450d00fd0c02486

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
