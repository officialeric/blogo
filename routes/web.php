<?php

use App\Http\Controllers\AdminProccessor;
use App\Http\Controllers\PostProccessor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AdminProccessor::class,'index'])->name('admin.index');
Route::post('/admin/auth/login',[AdminProccessor::class,'login'])->name('admin.login');
Route::get('/admin/home', [PostProccessor::class, 'index'])->name('admin.home');
Route::get('/admin/auth/logout', [AdminProccessor::class, 'logout'])->name('admin.logout');
