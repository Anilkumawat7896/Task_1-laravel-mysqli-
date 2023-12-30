<?php

use App\Http\Controllers\EmployeeInfoController;

Route::get('/employee', [EmployeeInfoController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeInfoController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeInfoController::class, 'store'])->name('employee.store');
Route::get('/employee/{employeeInfo}', [EmployeeInfoController::class, 'show'])->name('employee.show');
Route::get('/employee/{employeeInfo}/edit', [EmployeeInfoController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employeeInfo}', [EmployeeInfoController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employeeInfo}', [EmployeeInfoController::class, 'destroy'])->name('employee.destroy');

