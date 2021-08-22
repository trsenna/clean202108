<?php

use App\Http\Controllers\Customers\DestroyController;
use App\Http\Controllers\Customers\EditController;
use App\Http\Controllers\Customers\IndexController;
use App\Http\Controllers\Customers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('customers', IndexController::class);
Route::post('customers', StoreController::class);
Route::patch('customers/{id}', EditController::class);
Route::delete('customers/{id}', DestroyController::class);
