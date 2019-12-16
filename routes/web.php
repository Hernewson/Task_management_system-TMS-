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

Route::GET( 'todos/{todo}/delete', 'TodosController@destroy' );

Route::POST( 'todos/{todo}/update-todos', 'TodosController@update' );
Route::get( 'todos/{todo}/edit', 'TodosController@edit' );

Route::post('create-todos','TodosController@store');
Route::get('new-todos','TodosController@create');

Route::get('todos/{todo}', 'TodosController@show');
Route::get('todos','TodosController@index');

Route::get('/','PageController@index');




// Route::get('/', function () {
//     return view('pages/index');
// });

