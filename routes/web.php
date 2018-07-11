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
use App\Task;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/task', 'TasksController@index');
Route::get('/', 'HomeController@index');

Route::post('/task', 'TasksController@getTask');

Route::delete('/task/{id}', 'TasksController@deleteTask');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
