<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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


Route::controller(EmployeeController::class)->group(function(){

    Route::get('create','getEmployee');
    Route::get('singlEmployee/{id}','getSinglEmployee');
    Route::post('addEmployee','addEmployee');
    Route::put('editEmployee/{id}','editEmployee');
    Route::delete('deleteEmployee/{id}','deleteEmployee');
});