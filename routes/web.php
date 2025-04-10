<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\ModuleObjectController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SettingKontakController;
use App\Http\Controllers\SettingMedsosController;
use App\Http\Controllers\SettingProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdminController::class, 'index1'])->name('awal');
Route::get('/user-profile', [UserPageController::class, 'profile'])->name('user.profile');
Route::get('/user-produk/{id}', [UserPageController::class, 'produk'])->name('user.produk');
Route::get('/user-artikel', [UserPageController::class, 'artikel'])->name('user.artikel');
Route::get('/user-artikel/{slug}', [UserPageController::class, 'show'])->name('article.show');
Route::get('/user-galeri', [UserPageController::class, 'galeri'])->name('user.galeri');
Route::get('/user-kontak', [UserPageController::class, 'kontak'])->name('user.kontak');
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index2'])->name('dashboard');
    Route::get('/module', [moduleController::class, 'index'])->name('module');
    Route::get('/modules', [moduleController::class, 'index'])->name('modules.index');
    Route::post('/modules', [moduleController::class, 'store'])->name('modules.store');
    Route::put('/modules/{id}', [moduleController::class, 'update'])->name('modules.update');
    Route::delete('/modules/{id}', [moduleController::class, 'destroy'])->name('modules.destroy');
    
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

    Route::get('/akun', [AccountController::class, 'index'])->name('akun.index');
    Route::post('/akun/update', [AccountController::class, 'update'])->name('akun.update');
    Route::post('/akun/password', [AccountController::class, 'updatePassword'])->name('akun.updatePassword');

// Route resource lengkap dengan nama untuk masing-masing aksi
Route::resource('tags', TagController::class)->names([
    'index'   => 'tags.index',
    'create'  => 'tags.create',
    'store'   => 'tags.store',
    'edit'    => 'tags.edit',
    'update'  => 'tags.update',
    'destroy' => 'tags.destroy',
]);

});
