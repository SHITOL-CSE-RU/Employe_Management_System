<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('emp.create');
Route::post('store', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('emp.store');
Route::get('view/{id}', [\App\Http\Controllers\EmployeeController::class, 'view'])->name('emp.view');
Route::get('edit/{id}', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('emp.edit');
Route::post('update', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('emp.update');
Route::get('destroy/{id}', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('emp.destroy');
Route::get('/search/', 'PostsController@search')->name('search');
