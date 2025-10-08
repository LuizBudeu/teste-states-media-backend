<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/leads', [App\Http\Controllers\LeadController::class, 'store']);
Route::get('/leads', [LeadController::class, 'index']);
