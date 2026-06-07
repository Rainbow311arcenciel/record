<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\RecordController;

Route::get('/titles', [TitleController::class, 'index']);

Route::get(
    '/titles/{title}/records',
    [RecordController::class, 'index']
)->name('records.index');

Route::get(
    '/titles/{title}/records/create',
    [RecordController::class, 'create']
)->name('records.create');

Route::post(
    '/titles/{title}/records',
    [RecordController::class, 'store']
)->name('records.store');