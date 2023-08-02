<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\FrontViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(FrontViewController::class)->name('guest.')->group( function() {

    Route::get('/', 'welcome')->name('welcome');
    
    Route::get('/login', 'showLogin')->name('login.show');
    Route::post('/login', 'login')->name('login.try');

    Route::get('/register', 'showRegister')->name('register.show');
    Route::post('/register', 'register')->name('register.try');


    Route::get('/404', 'empty')->name('empty');

});

Route::controller(UrlController::class)->name('url.')->group( function() {

    Route::get('/url-shortener', 'showForm')->name('show_form');
    Route::post('/url-shortener', 'shorten')->name('try');
    Route::get('/{code}', 'showURL')->name('redirect');

});

Route::fallback(function () {
    return view('404');
});
