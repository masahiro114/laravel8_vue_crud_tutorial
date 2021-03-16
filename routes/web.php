<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');


// Route::get('/api/posts', [PostController::class, 'index']);
// Route::post('/api/post/add', [PostController::class, 'add']);

// Route::get('/api/post/edit/{id}', [PostController::class, 'edit']);
// Route::post('/api/post/update/{id}', [PostController::class, 'update']);
// Route::post('/api/post/delete/{id}', [PostController::class, 'delete']);


// Route::get('/api/posts', [App\Http\Controllers\API\PostController::class, 'index']);
// Route::post('/api/post/add', [App\Http\Controllers\API\PostController::class, 'add']);

// Route::get('/api/post/edit/{id}', [App\Http\Controllers\API\PostController::class, 'edit']);
// Route::post('/api/post/update/{id}', [App\Http\Controllers\API\PostController::class, 'update']);
// Route::post('/api/post/delete/{id}', [App\Http\Controllers\API\PostController::class, 'delete']);

// Route::get('/api/posts', 'API\PostController@index');
// Route::post('/api/post/add', 'API\PostController@add');

// Route::get('/api/post/edit/{id}', 'API\PostController@edit');
// Route::post('/api/post/update/{id}', 'API\PostController@update');
// Route::post('/api/post/delete/{id}', 'API\PostController@delete');