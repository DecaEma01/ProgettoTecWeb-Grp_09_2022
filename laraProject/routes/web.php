<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index/', function () {
    return view('index');
});

Route::get('login/', function () {
    return view('login');
});

Route::get('signup/', function () {
    return view('signup');
});

Route::get('profile/', function () {
    return view('profile');
});

Route::get('catalog/', function () {
    return view('catalog');
});

Route::get('myinfo/', function () {
    return view('myinfo');
});

Route::get('stats/', function () {
    return view('stats');
});

Route::get('previews/', function () {
    return view('previews');
});

Route::get('chat/', function () {
    return view('chat');
});

Route::get('faqs/', function () {
    return view('faqs');
});

Route::get('/faq/{id_faq}', 'FaqsController@showFaq')
        ->name('faq');

Route::post('/admin/updatefaq', 'FaqsController@updateFaq')
        ->name('update-faq');

Route::get('house/', function () {
    return view('house');
});

Route::get('add-house/', function () {
    return view('add-house');
});

Route::get('edit-house/', function () {
    return view('edit-house');
});