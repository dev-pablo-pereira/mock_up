<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Hotel\HotelController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('admin.authenticate');
    
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');

    Route::get('/hotel', [HotelController::class, 'index'])->name('admin.hotel.index');
    Route::get('/new_hotel', [HotelController::class, 'create'])->name('admin.hotel.create');
    Route::post('/create_hotel', [HotelController::class, 'store'])->name('admin.hotel.store');
    Route::get('/edit/{id}', [HotelController::class, 'edit'])->name('admin.hotel.edit');
    Route::put('/update/{id}', [HotelController::class, 'update'])->name('admin.hotel.update');
    Route::post('/destroy/{id}', [HotelController::class, 'destroy'])->name('admin.hotel.destroy');

    Route::post('/destroy/image/{id}', [ImageController::class, 'destroy'])->name('admin.image.destroy');
});
