<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterUserController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\WorkLogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->prefix('/work')->group(function () {
    Route::get('/logs/create', [WorkLogController::class, 'create'])->middleware(['auth'])->name('work_logs.create');
    Route::post('/logs', [WorkLogController::class, 'store'])->middleware(['auth'])->name('work_logs.store');
    Route::get('/logs', [WorkLogController::class, 'index'])->middleware(['auth'])->name('work_logs.index');
});


Route::middleware('admin.verified')->group(function () {
    Route::get('employees/register', [RegisterUserController::class, 'create'])
                ->name('employees.register');

    Route::post('employees/register', [RegisterUserController::class, 'store']);
    Route::get('employees', [EmployeesController::class, 'index'])
        ->name('employees.index');
});

require __DIR__.'/auth.php';
