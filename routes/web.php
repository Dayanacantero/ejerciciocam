<?php

use App\Http\Controllers\EjemplarUsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\TruckTruckerController;

use Illuminate\Support\Facades\Route;

//Route::get('/asociar',[TruckTruckerController::class,'index']);
Route::post('asociar/store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');


Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::post('/asociar', [EjemplarUsuarioController::class,'store'])->name('ejemplar_usuario.store');
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');
Route::get('/libros/{libro}', [LibroController::class, 'show'])->name('libros.show');
Route::get('/libros/{libro}/editar', [LibroController::class,'edit'])->name('libros.edit');
Route::put('/libros/{libro}', [LibroController::class,'update'])->name('libros.update');
Route::delete('/libros/{libro}', [LibroController::class,'destroy'])->name('libros.destroy');



