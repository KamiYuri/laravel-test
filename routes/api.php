<?php

use App\Http\Controllers\api\Test5Controller;
use App\Http\Controllers\api\TestController;
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

Route::get('/testss', [TestController::class, "index"]);
Route::get('testsadas/abc', [TestController::class, 'abc']);

Route::apiResource('test', TestController::class);
Route::apiResource('test5', Test5Controller::class);
