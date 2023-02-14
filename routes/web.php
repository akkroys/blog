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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/blog/{post}', [\App\Http\Controllers\PostController::class, 'show']);
Route::get('/blog/create/post', [\App\Http\Controllers\PostController::class, 'create']); // shows create form
Route::post('/blog/create/post', [\App\Http\Controllers\PostController::class, 'store']); // saves it to db
Route::get('/blog/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit']); // shows edit form
Route::put('/blog/{post}/edit', [\App\Http\Controllers\PostController::class, 'update']);
Route::delete('/blog/{post}', [\App\Http\Controllers\PostController::class, 'destroy']);
