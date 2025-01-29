<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    
    // Service routes
    Route::get('/rental-lepas-kunci', 'lepasKunci')->name('services.lepas-kunci');
    Route::get('/carter-dalam-kota', 'carterDalam')->name('services.carter-dalam');
    Route::get('/carter-luar-kota', 'carterLuar')->name('services.carter-luar');
    Route::get('/regular', 'regular')->name('services.regular');
    
    // Contact page
    Route::get('/contact', 'contact')->name('contact');
    
    // Cars page
    Route::get('/cars', 'cars')->name('cars');
});
