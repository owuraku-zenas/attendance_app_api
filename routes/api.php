<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\PeopleController;
use App\Http\Middleware\EnsureDateIsSingle;
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

Route::post('/add-date', [DateController::class, 'create'])->middleware(EnsureDateIsSingle::class);
Route::post('/add-person', [PeopleController::class, 'store']);
Route::post('/take-attendance', [AttendanceController::class, 'create']);


