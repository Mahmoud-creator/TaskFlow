<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\ProjectAttributeController;

Route::apiResource('attributes', AttributeController::class);

Route::post('/projects/{project}/attributes', [ProjectAttributeController::class, 'store']);
Route::get('/projects', [ProjectAttributeController::class, 'index']);