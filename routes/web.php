<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\RecordController;

Route::get('/titles', [TitleController::class, 'index'])
    ->name('titles.index');

Route::get('/titles/{title}/records', [RecordController::class, 'index'])
    ->name('records.index');

Route::post('/records', [RecordController::class, 'store'])
    ->name('records.store');