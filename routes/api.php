<?php

use App\Http\Controllers\Api\Frontend\Index\ApiIndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('backend.')->group(function () {

});

Route::name('frontend.')->group(function () {
    Route::controller(ApiIndexController::class)->group(function () {
        Route::post('/frontend/index/mainmenu', 'main');
    });
});
