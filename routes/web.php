<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    
    // Service routes
    Route::get('/rental-lepas-kunci', 'lepasKunci')->name('services.lepas-kunci');
    Route::get('/carter-dalam-kota', 'carterDalam')->name('services.carter-dalam');
    Route::get('/carter-regular', 'carterRegular')->name('services.carter-regular');
    
    // Contact page
    Route::get('/contact', 'contact')->name('contact');
    
    // Cars page
    Route::get('/cars', 'cars')->name('cars');
});
