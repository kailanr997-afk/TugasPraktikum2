<?php

use App\Http\Controllers\FloodReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FloodReportController::class, 'create'])->name('home');
Route::get('/lapor-banjir', [FloodReportController::class, 'create'])->name('flood.create');
Route::post('/lapor-banjir', [FloodReportController::class, 'store'])->name('flood.store');