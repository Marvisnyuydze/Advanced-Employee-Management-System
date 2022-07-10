<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterUserController;
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

Route::middleware('admin.verified')->group(function () {
    Route::get('employees/register', [RegisterUserController::class, 'create'])
                ->name('employees.register');

    Route::post('employees/register', [RegisterUserController::class, 'store']);
});

require __DIR__.'/auth.php';