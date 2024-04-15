<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(NewsController::class)->prefix('admin')->name('news.')->group(function(){
    Route::get('news/create', 'add')->name('add');
});

Route::controller(SelfProfileController::class)->prefix('admin')->name('profile.')->group(function(){
    Route::get('admin/profile/create', 'add')->name('add');
    Route::get('admin/profile/edit', 'edit')->name('edit');
});