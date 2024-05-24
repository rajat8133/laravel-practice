<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentMarkController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserDataController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('students', StudentController::class)->only(['store', 'update', 'destroy', 'index']);
Route::apiResource('students', StudentController::class)->only(['update']);

Route::apiResource('subjects', SubjectController::class)->only(['store', 'update', 'destroy', 'index']);

Route::apiResource('studentmarks', StudentMarkController::class)->only(['store', 'index', 'update']);
//Route::apiResource('studentmarks', StudentMarkController::class)->only(['update']);
Route::apiResource('studentmarks', StudentMarkController::class)->only(['destroy']);

Route::apiResource('employee', EmployeeController::class)->only(['store', 'update', 'destroy', 'index']);

Route::apiResource('customers', CustomerController::class)->only(['store', 'update', 'destroy', 'index']);

Route::apiResource('shipments', ShipmentController::class)->only(['store', 'update', 'destroy', 'index']);
//Route::apiResource('shipments', ShipmentController::class)->only(['destroy']);

Route::apiResource('clients', ClientController::class)->only(['store', 'update', 'destroy', 'index']);
Route::apiResource('clients', ClientController::class)->only(['store', 'index']);

Route::apiResource('usersdata', UserDataController::class)->only(['index', 'store']);
