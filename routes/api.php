<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees/store', [EmployeeController::class, 'store']);
Route::patch('/employees/update', [EmployeeController::class, 'update']);
Route::delete('/employees/delete', [EmployeeController::class, 'delete']);

Route::get('/departments', [DepartmentController::class, 'index']);
Route::post('/departments/store', [DepartmentController::class, 'store']);
Route::patch('/departments/update', [DepartmentController::class, 'update']);
Route::delete('/departments/delete', [DepartmentController::class, 'delete']);