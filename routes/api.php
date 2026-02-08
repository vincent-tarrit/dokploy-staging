<?php

use App\Http\Controllers\DeployController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/deploy', [DeployController::class, 'deploy'])->middleware('auth:sanctum');
