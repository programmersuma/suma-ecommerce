<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\Index\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('main.')->group(function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->middleware('guest')->name('index');
    });
});
