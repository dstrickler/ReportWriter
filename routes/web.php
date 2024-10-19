<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Report;
use App\Http\Controllers\LivewireTestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/report', Report::class);
// Route::get('/report', LivewireTestController::class);

