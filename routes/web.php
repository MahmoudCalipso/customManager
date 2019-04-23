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
    return view('welcome');
});

//client route
Route::get('/client', 'clientController@index')->name('client.index');
Route::get('/client/edit/{id}', 'clientController@edit')->name('client.edit');
Route::post('/client/update/{id}', 'clientController@update')->name('client.update');
Route::get('/client/create', 'clientController@create')->name('client.create');
Route::post('/client/store', 'clientController@store')->name('client.store');
Route::get('/client/delete/{id}', 'clientController@destroy')->name('client.delete');

//fournisseur route
Route::get('/fournisseur', 'fournisseurController@index')->name('fournisseur.index');
Route::get('/fournisseur/edit/{id}', 'fournisseurController@edit')->name('fournisseur.edit');
Route::post('/fournisseur/update/{id}', 'fournisseurController@update')->name('fournisseur.update');
Route::get('/fournisseur/create', 'fournisseurController@create')->name('fournisseur.create');
Route::post('/fournisseur/store', 'fournisseurController@store')->name('fournisseur.store');
Route::get('/fournisseur/delete/{id}', 'fournisseurController@destroy')->name('fournisseur.delete');
//TVA Article
Route::get('/tva', 'TvaController@index')->name('tva.index');
Route::get('/tva/edit/{id}', 'TvaController@edit')->name('tva.edit');
Route::post('/tva/update/{id}', 'TvaController@update')->name('tva.update');
Route::get('/tva/create', 'TvaController@create')->name('tva.create');
Route::post('/tva/store', 'TvaController@store')->name('tva.store');
Route::get('/tva/delete/{id}','TvaController@destroy')->name('tva.delete');
//Marque Controller
Route::get('/marques', 'MarquesController@index')->name('marques.index');
Route::get('/marque/edit/{id}', 'MarquesController@edit')->name('marque.edit');
Route::post('/marque/update/{id}', 'MarquesController@update')->name('marque.update');
Route::get('/marque/create', 'MarquesController@create')->name('marque.create');
Route::post('/marque/store', 'MarquesController@store')->name('marque.store');
Route::get('/marque/delete/{id}','MarquesController@destroy')->name('marque.delete');
//Type_ArT
Route::get('/type_arts', 'TypeArticleController@index')->name('type_art.index');
Route::get('/type_art/edit/{id}', 'TypeArticleController@edit')->name('type_art.edit');
Route::post('/type_art/update/{id}', 'TypeArticleController@update')->name('type_art.update');
Route::get('/type_art/create', 'TypeArticleController@create')->name('type_art.create');
Route::post('/type_art/store', 'TypeArticleController@store')->name('type_art.store');
Route::get('/type_art/delete/{id}','TypeArticleController@destroy')->name('type_art.delete');
//Article route
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/article/get/{id}', 'ArticleController@getItem')->name('articles.getItem');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article/store', 'ArticleController@store')->name('article.store');
Route::get('/article/delete/{id}','ArticleController@destroy')->name('article.delete');
//Magasin route
Route::get('/magasins', 'MagasinController@index')->name('magasin.index');
Route::get('/magasin/edit/{id}', 'MagasinController@edit')->name('magasin.edit');
Route::post('/magasin/update/{id}', 'MagasinController@update')->name('magasin.update');
Route::get('/magasin/create', 'MagasinController@create')->name('magasin.create');
Route::post('/magasin/store', 'MagasinController@store')->name('magasin.store');
Route::get('/magasin/delete/{id}','MagasinController@destroy')->name('magasin.delete');
//Caisse route
Route::get('/caisse', 'CaisseController@index')->name('caisse.index');
//Session route
Route::get("/session/articles/get", 'Session@index')->name("session.index");
Route::get("/session/articles/remove/{id}", 'Session@removeItem')->name("session.removeItem");
Route::get("/session/articles/reduce/{id}", 'Session@reduceItem')->name("session.reduceItem");
Route::get("/session/articles/setCount/{id}/{count}", 'Session@setItemCount')->name("session.setItemCount");
Route::get("/session/articles/clear", 'Session@clearItemSession')->name("session.clearItemSession");
Route::get("/session/price/getUpdated", 'Session@getUpdatedPrice')->name("session.getUpdatedPrice");
Route::get("/session/price/clear", 'Session@clearPriceSession')->name("session.clearPriceSession");
// Users routes
Route::get("/users/view", "UsersController@index")->name("users.index");
Route::get('/user/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::get('/user/create', 'UsersController@create')->name('users.create');
Route::post('/user/store', 'UsersController@store')->name('users.store');
Route::get("/user/delete/{id}", "UsersController@delete")->name("users.delete");
// User login
Route::get("/login", "AuthController@index")->name("auth.index");
Route::get("/auth/user", "AuthController@login")->name("auth.login");
