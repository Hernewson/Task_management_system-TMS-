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

use App\Http\Controllers\UserController;

Route::resource('clients', 'ClientsController');

//  Clients controller starts from here


//  Todo controller starts from here

Route::GET('todos/{todo}/rollback', 'TodosController@rollback');

Route::GET('completed', 'TodosController@completed');

Route::GET('todos/{todo}/complete', 'TodosController@complete');


Route::GET('todos/{todo}/delete', 'TodosController@destroy');

Route::POST('todos/{todo}/update-todos', 'TodosController@update');
Route::get('todos/{todo}/edit', 'TodosController@edit');

Route::post('create-todos', 'TodosController@store');
Route::get('new-todos', 'TodosController@create');

Route::get('todos/{todo}', 'TodosController@show');
Route::get('todos', 'TodosController@index');

Route::get('/', 'PageController@index');

//  Todo controller ends from here




Route::get('/', function () {
    return view('register');
});

//User Routes
Route::match(['get', 'post'], '/add-user', 'UserController@addUser')->name('addUser');
// Route::get('/view-users', 'UserController@viewAllUsers')->name('viewAllUsers');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/view-users', 'UserController@viewAllUsers')->name('viewAllUsers');
});
Route::match(['get', 'post'], '/edit-user/{id}', 'UserController@editUser')->name('editUser');
Route::get('delete-user/{id}', 'UserController@deleteUser')->name('deleteUser');

//User Profile Route
Route::match(['get','post'],'/view-profile', 'UserController@viewProfile')->name('viewProfile');
Route::put('/view-profile', 'UserController@update')->name('users.update-profile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
