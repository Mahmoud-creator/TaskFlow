<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\ProjectAttributeController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;

Route::apiResource('attributes', AttributeController::class);

Route::post('/projects/{project}/attributes', [ProjectAttributeController::class, 'store']);
Route::get('/projects', [ProjectAttributeController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('timesheets', TimesheetController::class);
});