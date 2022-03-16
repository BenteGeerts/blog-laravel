<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\CommentsController;

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
Auth::routes();
Route::get('/', [PageController::class, "index"]);
Route::resource("posts", PostsController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post("/posts/{post}", [LikesController::class, "like"])->name("likes.like");
Route::post("comments/{post}", [CommentsController::class, "store"])->name("comments.store");
