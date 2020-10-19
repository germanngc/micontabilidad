<?php

use App\Models\Category;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Category
 */
Route::prefix('categories')->group(function() {
	Route::get('/', [CategoryController::class, 'index']);
	Route::get('/{category}', [CategoryController::class, 'show']);
	Route::post('/', [CategoryController::class, 'store']);
	Route::put('/{category}', [CategoryController::class, 'update']);
	Route::delete('/{category}', [CategoryController::class, 'delete']);
});