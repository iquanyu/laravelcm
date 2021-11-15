<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Entities\Post;

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
  $posts = Post::publish()->orderBy('published_at', 'desc')->limit(6)->get();
  return view('welcome', [
    'posts' => $posts,
    'tutoriels' => []
  ]);
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');
