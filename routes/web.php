<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/clearcache', function () {
    // Utworzenie symbolic linku dla storage
    Artisan::call('storage:link');

    // Czyszczenie cache aplikacji
    Artisan::call('cache:clear');

    // Czyszczenie cache konfiguracji
    Artisan::call('config:clear');

    // Czyszczenie cache widoków
    Artisan::call('view:clear');

    // Czyszczenie cache routingu
    Artisan::call('route:clear');

    return 'Cache został wyczyszczony, a link do storage utworzony!';
});

Route::controller(PagesController::class)->group(function (): void {
    Route::get('/', 'home')->name('home');
    Route::get('/sklep', 'shop')->name('shop');
    Route::get('/sklep/{product:slug}', 'product')->name('product');
    Route::get('/kontakt', 'contact')->name('contact');
    Route::post('/kontakt', 'sendContact')->name('contact.send');
    Route::get('/szukaj', 'search')->name('search');

    Route::get('/{slug}', 'page')->name('page');
});
