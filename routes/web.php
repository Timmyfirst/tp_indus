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
Route::get('/foo', function () {
    return 'Hello World';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('book/{id}', 'BookController@show');

Route::get('/book', 'BookController@recupBook')->name('book');
Route::post('/book/add/', 'BookController@postForm');
Route::post('/book/supp', 'BookController@deleteBook');
Route::post('/book/edit', 'BookController@editBook');
//Route::get('/book/valid/{id}/{state}', 'ListeController@validTask');

//Route::get('/book/{numCat}', 'ListeController@recupListCat');
