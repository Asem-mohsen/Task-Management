<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ TaskController , ProjectController, DashboardController};


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('projects', ProjectController::class);

Route::resource('tasks', TaskController::class);

Route::post('/tasks/reorder', [TaskController::class, 'reorder'])->name('tasks.reorder');