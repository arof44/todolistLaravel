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

/**
 * Show Todo dashboard
 */
Route::get('/', 'TodoController@index');

/**
 * Show create Todo form
 */
Route::get('/todos/create', 'TodoController@create');

/**
 * Add Todo
 */
Route::post('/todos', 'TodoController@store');

/**
 * history
 */
Route::get('/todos/history', 'TodoController@history');

/**
 * Show edit Todo
 */
Route::get('todos/{todo}/edit', 'TodoController@edit');

/**
 * Update Todo
 */
Route::put('todos/{todo}', 'TodoController@update');

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', 'TodoController@delete');