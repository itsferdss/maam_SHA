<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AdminController;

Route::get('/admins', [AdminController::class, 'login']);


// Expenses Routes
Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expenses/{expense}', [ExpenseController::class, 'show'])->name('expenses.show');
Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');

// Employees Routes
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/salary-history/{id}', [SalaryHistoryController::class, 'show']);
Route::put('/salary-history/{id}', [SalaryHistoryController::class, 'update']);
Route::post('/salary-history', [SalaryHistoryController::class, 'store'])->name('salary-history.store');

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

