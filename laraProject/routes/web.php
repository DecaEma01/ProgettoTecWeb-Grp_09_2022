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

Route::get('/', 'IndexController@getIndex');

Route::get('/index', 'IndexController@getIndex');

//Route::get('login/', function () {
    //return view('login');
//});


// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

Route::get('/logout', 'Auth\LoginController@logout');


Route::get('signup/', function () {
    return view('signup');
});


// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');



//Route::get('profile/', function () {
  //  return view('profile');
//});

Route::get('catalog/', function () {
    return view('catalog');
});


//Rotta per la modfiica dei proprio dati utente
Route::get('myinfo/', function () {
    return view('myinfo');
});

Route::post('/myinfo/updatemyinfo', 'MyInfoController@updateUser')
        ->name('update-myinfo');


        


Route::get('stats/', function () {
    return view('stats');
});

Route::get('previews/', function () {
    return view('previews');
});

Route::get('chat/', function () {
    return view('chat');
});


// --- BY MAX ----------------------------------------------

Route::get('previews/', 'ChatsController@showChats')
    ->name('previews');

Route::get('/chat/{id_chat}', 'ChatsController@showChat')
    ->name('chat');

Route::get('/chat/{id_chat}/option/{id_casa}', 'ChatsController@showChatWithOption')
    ->name('chat-with-option');

Route::post('/new-message/{id_chat}', 'ChatsController@createMessageWithOption')
     ->name('create-message-with-option');

Route::post('/new-message/{id_chat}', 'ChatsController@createMessage')
    ->name('create-message');

Route::get('/options/{id_casa}', 'OptionsController@showOptions')
    ->name('options');

// --- END BY MAX ------------------------------------------

//gestione delle faq
Route::get('faqs/', function () {
    return view('faqs');
});

Route::get('faqs/', function () {
    return view('faqs');
});
Route::get('add-faq/', function () {
    return view('add-faq');
});


Route::get('/faqs', 'FaqsController@list')
        ->name('faqs');

//mi restituisce la form vuota
Route::get('/faq/new', 'FaqsController@create')
    ->name('new-faq');

//mi ristituisce la forma popolata
Route::get('/faq/{id_faq}', 'FaqsController@showFaq')
        ->name('faq');

//mi permette di inserire una nuova faq
Route::post('/admin/insertfaq', 'FaqsController@insertFaq')
->name('insert-faq');

//modifica
Route::put('/admin/updatefaq', 'FaqsController@updateFaq')
        ->name('update-faq');

//cancellazione
Route::delete('/admin/deletefaq', 'FaqsController@deleteFaq')
        ->name('delete-faq');

//visualizza le faq nella home
Route::get('userfaqs/', function () {
    return view('userfaqs');
});
//aggiunge faq
Route::get('add-faq/', function () {
    return view('add-faq');
});






Route::get('house/', function () {
    return view('house');
});

Route::get('add-house/', function () {
    return view('add-house');
});

Route::get('edit-house/', function () {
    return view('edit-house');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//................rotte di prova
Route::get('showCatalog/','PublicController@showCatalog');

Route::get('filterCatalog/','PublicController@filtraCatalogo');

