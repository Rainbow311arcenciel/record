<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\TitleController;

Route::get('/records', [RecordController::class, 'index']);

Route::get('/titles', [TitleController::class, 'index']);
