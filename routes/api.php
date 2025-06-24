<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('all-category',[CategoryController::class,'index']);
Route::post('create-category',[CategoryController::class,'createCategory']);
Route::post('create-sub-category',[CategoryController::class,'createSubCategory']);

Route::get('all-category-rep',[CategoryController::class,'getCatRep']);
