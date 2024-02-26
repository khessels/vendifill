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

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
