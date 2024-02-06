<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'root'])->name('root');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/articles/{article}/{slug?}', [ArticlesController::class, 'show'])->name('articles.show');

Route::feeds();
