<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\SocialController;
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

    Route::get('/logout', 'logout')->name('logout');


    Route::get('/404', 'empty')->name('empty');

});



Route::controller(NotesController::class)->name('notes.')->group( function () {

    Route::get('/note', 'showNoteForm')->name('show_form');
    Route::post('/note', 'save')->name('try');
    Route::get('/notes/{code}', 'note_url')->name('redirect');

    Route::get('/note/{code}', 'show_note')->name('show.note');
    Route::get('/note/{code}/verify', 'verify_note')->name('verify.otp');
    Route::post('/note/{code}/verify', 'verify')->name('otp.verify');

});

Route::controller(SocialController::class)->name('social.')->group( function () {

    Route::get('/social-profile', 'showForm')->name('show_form');
    Route::post('/social-profile', 'save')->name('try');

    Route::get('/socials/{code}', 'social_url')->name('redirect');
    Route::get('/social/{code}', 'show_social')->name('show.social');

});

Route::controller(PanelController::class)->middleware('auth')->name('boarded.')->group( function() {

    Route::get('/dashboard', 'dashboard')->name('panel.index');

    Route::get('/dashboard/socials', 'socials')->name('socials.index');

    Route::get('/dashboard/notes', 'notes')->name('notes.index');

    Route::get('/dashboard/urls', 'urls')->name('urls.index');

});

Route::controller(UrlController::class)->name('url.')->group( function() {

    Route::get('/url-shortener', 'showForm')->name('show_form');
    Route::post('/url-shortener', 'shorten')->name('try');
    Route::get('/{code}', 'showURL')->name('redirect');

});





Route::fallback(function () {
    return view('404');
});
