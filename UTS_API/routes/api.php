<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventRegistrationController;

Route::get('/registrations', [EventRegistrationController::class, 'index']);
Route::post('/registrations', [EventRegistrationController::class, 'store']);
