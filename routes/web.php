<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\ModuleObjectController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SettingKontakController;
use App\Http\Controllers\SettingMedsosController;
use App\Http\Controllers\SettingProfileController;
use App\Http\Controllers\UserPageController;
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

Route::get('/setting-profile', [SettingProfileController::class, 'profile'])->name('profile');
Route::post('/setting-profile/update', [SettingProfileController::class, 'profileUpdate'])->name('setting.update');

Route::get('/setting-kontak', [SettingKontakController::class, 'index'])->name('kontak');
Route::post('/setting-kontak', [SettingKontakController::class, 'update'])->name('kontak.update');

Route::get('/setting-medsos', [SettingMedsosController::class, 'index'])->name('medsos');
Route::post('/setting-medsos', [SettingMedsosController::class, 'update'])->name('medsos.update');

Route::get('/user-profile', [UserPageController::class, 'profile'])->name('user.profile');
Route::get('/user-produk/{id}', [UserPageController::class, 'produk'])->name('user.produk');
Route::get('/user-artikel', [UserPageController::class, 'artikel'])->name('user.artikel');
Route::get('/user-artikel/{slug}', [UserPageController::class, 'show'])->name('article.show');
Route::get('/user-galeri', [UserPageController::class, 'galeri'])->name('user.galeri');
Route::get('/user-kontak', [UserPageController::class, 'kontak'])->name('user.kontak');