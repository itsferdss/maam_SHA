<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalaryHistoryController;

Route::get('/login', [AdminController::class, 'login']);


Route::get('/expenses', [ExpenseController::class, 'index']);
Route::post('/expenses', [ExpenseController::class, 'store']);
Route::put('/expenses/{expense}', [ExpenseController::class, 'update']);
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy']);

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

Route::get('/salary-history/{id}', [SalaryHistoryController::class, 'show']);
Route::put('/salary-history/{id}', [SalaryHistoryController::class, 'update']);
Route::post('/salary-history', [SalaryHistoryController::class, 'store'])->name('salary-history.store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
