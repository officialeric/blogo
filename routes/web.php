<?php

use App\Http\Controllers\AdminProccessor;
use App\Http\Controllers\PostProccessor;
use App\Http\Controllers\UserProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserProcessor::class,'index']);

Route::get('/admin/login',[AdminProccessor::class,'index'])->name('admin.index');
Route::post('/admin/auth/login',[AdminProccessor::class,'login'])->name('admin.login');
Route::get('/admin/auth/logout', [AdminProccessor::class, 'logout'])->name('admin.logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', [PostProccessor::class, 'index'])->name('admin.home');
    Route::get('/admin/post/add', [PostProccessor::class, 'create'])->name('admin.add');
    Route::post('/admin/post/store', [PostProccessor::class, 'store'])->name('admin.store');
    Route::get('/admin/post/{id}/edit', [PostProccessor::class, 'edit'])->name('admin.edit');
    Route::get('/admin/post/{id}/delete', [PostProccessor::class, 'destroy'])->name('admin.delete');

});