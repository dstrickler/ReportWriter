<?php

use App\Livewire\Report;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivewireTestController;

Route::get('/', function () {
    return view('welcome');
});


// Exmaple from https://livewire.laravel.com/docs/quickstart
Route::get('/counter', Counter::class);

Route::get('/report', Report::class);
// Route::get('/report', LivewireTestController::class);

