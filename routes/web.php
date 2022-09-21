<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category-blog', [HomeController::class, 'category'])->name('category-blog');
Route::get('/blog-detail', [HomeController::class, 'detail'])->name('category-detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');
    Route::post('/category-create', [CategoryController::class, 'create'])->name('create-category');
    Route::get('/category-manage', [CategoryController::class, 'manage'])->name('manage-category');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::post('/category-update', [CategoryController::class, 'update'])->name('update-category');


    Route::get('/add-blog', [BlogController::class, 'index'])->name('add-blog');
    Route::post('/blog-create', [BlogController::class, 'create'])->name('create-blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
});
