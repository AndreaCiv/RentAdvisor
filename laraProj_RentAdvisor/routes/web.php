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
Route::get('/home/{username}', 'CatalogoController@home')
    ->name('home');

Route::get('/home', 'CatalogoController@home')
    ->name('home');


Route::get('/catalogo', 'CatalogoController@catalogo_senza_filtri')
    ->name('catalog');

Route::get('/faq', 'FaqController@pagina_faq')
    ->name('faq');

Route::view('/contatti', 'views_html/contatti')
    ->name('contact');

Route::get('/dettagliannuncio/{id_annuncio}', 'CatalogoController@dettagli_annuncio')
        ->name('dettagli_annuncio');

// link del progetto del prof

Route::post('/admin/newproduct', 'AdminController@storeProduct')
        ->name('newproduct.store');

Route::get('/admin', 'AdminController@index')
        ->name('admin');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

// link locatario (studente)

Route::get('/visualizza_profilo_locatario/{username_locatario}', 'ProfiloController@pagina_profilo_locatario')
        ->name('visualizza_profilo_locatario')->middleware('can:isLocatario');

// link amministratore

Route::get('/faq/modifica/{id_faq}', 'FaqController@pagina_modifica_faq')
    ->name('modifica_faq')->middleware('can:isAdmin');

Route::post('faq/confermamodifica', 'FaqController@modifica_faq')
    ->name('conferma_modifica_faq')->middleware('can:isAdmin');

Route::get('/faq/aggiungi', 'FaqController@pagina_aggiungi_faq')
    ->name('aggiungi_faq')->middleware('can:isAdmin');

Route::post('faq/confermaaggiunta', 'FaqController@aggiungi_faq')
    ->name('conferma_aggiunta_faq')->middleware('can:isAdmin');

Route::get('/faq/elimina/{id_faq}', 'FaqController@pagina_elimina_faq')
    ->name('elimina_faq')->middleware('can:isAdmin');

Route::post('faq/confermaeliminazione', 'FaqController@elimina_faq')
    ->name('conferma_elimina_faq')->middleware('can:isAdmin');






// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
    ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
    ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
    ->name('register');

Route::post('register', 'Auth\RegisterController@register');



// Rotte inserite dal comando artisan "ui vue --auth"
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
