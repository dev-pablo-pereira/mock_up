<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Hotel\HotelController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'index'])->name('admin.login')->name('admin.login');
    Route::get('/present', [AdminController::class, 'present'])->name('admin.present');
    Route::get('/hotel', [HotelController::class, 'index'])->name('admin.hotel.index');
    Route::get('/new_hotel', [HotelController::class, 'new'])->name('admin.hotel.new');
    Route::post('/create_hotel', [HotelController::class, 'create'])->name('admin.hotel.create');
});
