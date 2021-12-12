<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\roomsController;
use App\Http\Controllers\bookingsController;

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [userController::class, 'index']);
    Route::get('/{id}', [userController::class, 'show']);
    Route::post('/', [userController::class, 'store']);
    Route::put('/{id}', [userController::class, 'update']);
    Route::delete('/{id}', [userController::class, 'destroy']);
});

Route::group(['prefix' => 'rooms'], function () {
    Route::get('/', [roomsController::class, 'index']);
    Route::get('/{id}', [roomsController::class, 'show']);
    Route::post('/', [roomsController::class, 'store']);
    Route::put('/{id}', [roomsController::class, 'update']);
    Route::delete('/{id}', [roomsController::class, 'destroy']);
});

Route::group(['prefix' => 'bookings'], function () {
    Route::get('/', [bookingsController::class, 'index']);
    Route::get('/{id}', [bookingsController::class, 'show']);
    Route::post('/', [bookingsController::class, 'store']);
    Route::put('/{id}', [bookingsController::class, 'update']);
    Route::delete('/{id}', [bookingsController::class, 'destroy']);
});

