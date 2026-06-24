<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\RecordController;

Route::get('/titles', [TitleController::class, 'index']);

Route::post('/records', [RecordController::class, 'store'])
    ->name('records.store');