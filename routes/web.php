<?php

use App\Http\Controllers\PostController;
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

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/blog/create/post', [PostController::class, 'create']); // shows create form
Route::post('/blog/create/post', [PostController::class, 'store'])->name('store.post'); // saves it to db
Route::get('/blog/{post}/edit', [PostController::class, 'edit']); // shows edit form
Route::put('/blog/{post}/edit', [PostController::class, 'update'])->name('update.post');
Route::delete('/blog/{post}', [PostController::class, 'destroy']);
