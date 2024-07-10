<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;







Route::get('/task', [TaskController::class, 'show']);
Route::get('/welcome', [TaskController::class, 'index']);
Route::post('/create-task', [TaskController::class, 'store']);
Route::patch('/edit-task/{id}', [TaskController::class, 'edit']);
Route::delete('/delete-task', [TaskController::class, 'destroy']);
