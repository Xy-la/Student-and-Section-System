<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
|
*/

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resource routes (auto-generate all CRUD routes)
Route::resource('students', StudentController::class);
Route::resource('sections', SectionController::class);
Route::resource('transactions', TransactionController::class);
