<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomesourceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentsourceController;
use App\Http\Controllers\ReportController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('accounts', AccountController::class);
Route::resource('incomes', IncomeController::class);
Route::resource('incomesources', IncomesourceController::class);
Route::resource('payments', PaymentController::class);
Route::resource('paymentsources', PaymentsourceController::class);
Route::get('reports/cash', [ReportController::class,'cash']);