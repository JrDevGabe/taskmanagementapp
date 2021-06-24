<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('tasks', [TaskController::class, 'index']);
Route::get('create-task', [TaskController::class, 'store']);
Route::post('tasks/{task}/update-task', [TaskController::class, 'update']);

Route::get('tasks/{id}/delete', [TaskController::class, 'destroy']);
