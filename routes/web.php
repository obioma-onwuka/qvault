<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProfileController;
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

    Route::get('/account/verify', 'resend_activation')->name('verify.page');

    Route::get('/verify/{activation_code}', 'verify')->name('verify.link');


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

    Route::get('/dashboard/social/{social}', 'show_social')->name('social.show')->where('social', '[0-9]+');

    Route::get('/dashboard/socials/{social}/edit', 'social_edit_form')->name('social.edit')->where('social', '[0-9]+');

    Route::put('/dashboard/social/edit/{social}', 'update_social')->name('social.update')->where('social', '[0-9]+');

    Route::delete('/dashboard/socials/{social}', 'delete_social')->name('social.delete');


    Route::get('/dashboard/notes', 'notes')->name('notes.index');

    Route::get('/dashboard/notes/{note}', 'show_note')->name('note.show')->where('note', '[0-9]+');

    Route::get('/dashboard/notes/{note}/edit', 'note_edit_form')->name('note.edit')->where('note', '[0-9]+');

    Route::put('/dashboard/note/edit/{note}', 'update_note')->name('note.update')->where('note', '[0-9]+');

    Route::delete('/dashboard/notes/{note}', 'delete_note')->name('note.delete');


    Route::get('/dashboard/urls', 'urls')->name('urls.index');

    Route::get('/dashboard/urls/{url}', 'show_url')->name('url.show')->where('url', '[0-9]+');

    Route::delete('/dashboard/urls/{url}', 'delete_url')->name('url.delete');




    Route::get('/dashboard/notes', 'notes')->name('notes.index');

    Route::get('/dashboard/urls', 'urls')->name('urls.index');

});

Route::controller(ProfileController::class)->middleware('auth')->name('profile.')->group( function() {

    Route::get('/profile', 'profile')->name('show');

    Route::get('/profile/settings', 'settings_form')->name('settings.show');
    Route::put('/profile/settings', 'update_bio')->name('settings.bio');

    Route::put('/profile/update', 'update_pass')->name('settings.pass');

});

Route::controller(UrlController::class)->name('url.')->group( function() {

    Route::get('/url-shortener', 'showForm')->name('show_form');
    Route::post('/url-shortener', 'shorten')->name('try');
    Route::get('/{code}', 'showURL')->name('redirect');

});





Route::fallback(function () {
    return view('404');
});
