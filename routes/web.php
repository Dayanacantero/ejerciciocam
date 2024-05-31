<?php

use App\Http\Controllers\TruckTruckerController;

use Illuminate\Support\Facades\Route;

Route::get('/asociar',[TruckTruckerController::class,'index']);
Route::post('asociar/store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');