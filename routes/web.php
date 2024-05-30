<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('\asociar',[TruckTruckerController::class,'index']);
Route::post('\asociar.store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');