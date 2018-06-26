<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List tasks
Route::get('tasks', 'TasksController@index');

// List single task

Route::get('task/{id}', 'TasksController@show');

// Create new task

Route::post('task/{id}', 'TasksController@store');

// Update task

Route::put('task/{id}', 'TasksController@update');

// Delete task

Route::delete('task/{id}', 'TasksController@destroy');
