<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\ModuleObjectController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [SesiController::class, 'registerPost'])->name('register.post');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
});

Route::get('/module', [moduleController::class, 'index'])->name('module');
Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
Route::put('/modules/{id}', [ModuleController::class, 'update'])->name('modules.update');
Route::delete('/modules/{id}', [ModuleController::class, 'destroy'])->name('modules.destroy');

Route::post('/module-objects', [ModuleObjectController::class, 'store'])->name('module-objects.store');
Route::delete('/module-objects/{moduleObject}', [ModuleObjectController::class, 'destroy'])->name('module-objects.destroy');

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
