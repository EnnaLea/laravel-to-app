<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    return view('task');
});





Route::get('/task', [TaskController::class, 'show']);
Route::get('/welcome', [TaskController::class, 'index']);
Route::post('/create-task', [TaskController::class, 'store']);
Route::put('/edit-task/{id}', [TaskController::class, 'edit']);
Route::delete('/delete-task/{id}', [TaskController::class, 'destroy']);
