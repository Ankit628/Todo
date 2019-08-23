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

use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::get('/todos', [
    'uses' => 'TodoController@displayAll',
    'as' => 'todos.open'
]);

Route::post('/create/todo', [
    'uses'  =>  'TodoController@store',
]);
Route::get('/delete/todo/{id}', [
    'uses'  =>  'TodoController@delete',
    'as' => 'todo.delete'
]);
Route::get('/update/todo/{id}', [
    'uses'  =>  'TodoController@update',
    'as' => 'todo.update'
]);
Route::post('/save/todo/{id}', [
    'uses'  =>  'TodoController@save',
    'as' => 'todos.save'
]);
Route::get('/completed/todo/{id}', [
    'uses' => 'TodoController@completed',
    'as' => 'todos.completed'
]);
