<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->get('/proxy', [App\Http\Controllers\ProxyController::class, 'proxy'])->name('proxy');

Route::get('/', function () {
    return view('welcome');
});
