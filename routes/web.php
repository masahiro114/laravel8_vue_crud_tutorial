<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\PostController;

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

Route::get('/api/posts', [App\Http\Controllers\API\PostController::class, 'index']);
Route::post('/api/post/add', [App\Http\Controllers\API\PostController::class, 'add']);

Route::get('/api/post/edit/{id}', [App\Http\Controllers\API\PostController::class, 'edit']);
Route::post('/api/post/update/{id}', [App\Http\Controllers\API\PostController::class, 'update']);
Route::post('/api/post/delete/{id}', [App\Http\Controllers\API\PostController::class, 'delete']);