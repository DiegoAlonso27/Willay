<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
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

Route::get('/', HomeController::class)->name('home.index');

Route::get('posts', [HomeController::class, 'index_post'])->name('posts.index');

Route::get('posts/1', [HomeController::class, 'show_post1'])->name('posts.show');

Route::get('posts/2', [HomeController::class, 'show_post2'])->name('posts.show2');

Route::get('posts/3', [HomeController::class, 'show_post3'])->name('posts.show3');

Route::get('interviews', [HomeController::class, 'index_interview'])->name('interviews.index');

Route::get('interviews/1', [HomeController::class, 'show_interview1'])->name('interviews.show');

Route::get('interviews/2', [HomeController::class, 'show_interview2'])->name('interviews.show2');

Route::get('interviews/3', [HomeController::class, 'show_interview3'])->name('interviews.show3');

Route::get('interviews/4', [HomeController::class, 'show_interview4'])->name('interviews.show4');

Route::get('podcasts', [HomeController::class, 'index_podcast'])->name('podcasts.index');

Route::get('podcasts/1', [HomeController::class, 'show_podcast1'])->name('podcasts.show');

Route::get('podcasts/2', [HomeController::class, 'show_podcast2'])->name('podcasts.show2');

Route::get('podcasts/3', [HomeController::class, 'show_podcast3'])->name('podcasts.show3');

Route::get('abouts', [HomeController::class, 'index_about'])->name('abouts.index');

/* Route::get('posts', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');

Route::get('report/{category}', [ReportController::class, 'category'])->name('reports.category'); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
