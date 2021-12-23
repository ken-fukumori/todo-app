<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodoController@index')->name('todo.index');
Route::get('/create', 'TodoController@create')->name('todo.create');
Route::post('/store', 'TodoController@store')->name('todo.store');
Route::get('/edit/{todo_id}', 'TodoController@edit')->name('todo.edit');
Route::post('/update/{todo_id}', 'TodoController@update')->name('todo.update');
