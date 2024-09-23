<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task',[TaskController::class, 'index'])->name('task.index');

Route::get('/task/create',[TaskController::class, 'create'])->name('task.create');

Route::post('/task',[TaskController::class, 'store'])->name('task.store');

Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');

Route::put('/task/{task}/update', [TaskController::class, 'update'])->name('task.update');

Route::delete('/task/{task}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');
