<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\app_api\UserController;
use App\Http\Controllers\app_api\ExhibitionController;

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
        Route::post('exhibition_travel', [ExhibitionController::class, 'exhibition_travel']);
        Route::post('exhibition_hotel', [ExhibitionController::class, 'exhibition_hotel']);
        Route::post('exhibition_food', [ExhibitionController::class, 'exhibition_food']);
        Route::post('exhibition_fees', [ExhibitionController::class, 'exhibition_fees']);
        Route::post('exhibition_commission', [ExhibitionController::class, 'exhibition_commission']);

        Route::post('others_expenses', [ExhibitionController::class, 'others_expenses']);
    });
});



Route::group(['prefix' => 'web', 'as' => 'web.'], function () {
    // Route::get('sales', [ReportsController::class, 'salesReport']);
});
