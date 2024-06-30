<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\app_api\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
    Route::post('login', [UserController::class, 'login']);
    
    Route::middleware('auth:api')->group(function () {
        Route::get('logout', [UserController::class, 'logout']);
        Route::post('data', [UserController::class, 'data']);
    });
});



Route::group(['prefix' => 'web', 'as' => 'web.'], function () {
    // Route::get('sales', [ReportsController::class, 'salesReport']);
});
