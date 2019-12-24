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

//  Clients controller starts from here
Route::resource('clients','ClientsController');

//  Clients controller starts from here


//  Todo controller starts from here

Route::GET('todos/{todo}/rollback', 'TodosController@rollback');

Route::GET('completed', 'TodosController@completed');

Route::GET('todos/{todo}/complete', 'TodosController@complete');

Route::GET( 'todos/{todo}/delete', 'TodosController@destroy' );

Route::POST( 'todos/{todo}/update-todos', 'TodosController@update' );
Route::get( 'todos/{todo}/edit', 'TodosController@edit' );

Route::post('create-todos','TodosController@store');
Route::get('new-todos','TodosController@create');

Route::get('todos/{todo}', 'TodosController@show');
Route::get('todos','TodosController@index');

//  Todo controller ends from here


//  Page controller starts from here

Route::GET('/admin','PageController@index')->name('admin');

//  Page controller starts from here


Route::get('/', function () {
    return view('register');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
