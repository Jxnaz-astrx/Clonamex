<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('index');
Route::get('/peliculas', [PrincipalController::class, 'peliculas'])->name('peliculas');
Route::get('/actores', [PrincipalController::class, 'actores'])->name('actores');

Route::get('/agregar', [PrincipalController::class, 'agregar'])->name('agregar');
Route::post('/guardar', [PrincipalController::class, 'guardar'])->name('guardar');
Route::get('/editar/{pelicula}', [PrincipalController::class, 'editar'])->name('editar');
Route::put('/actualizar/{pelicula}', [PrincipalController::class, 'actualizar'])->name('actualizar');
Route::delete('/borrar/{pelicula}', [PrincipalController::class, 'borrar'])->name('borrar');


Route::get('/agregar_actores', [PrincipalController::class, 'agregar_actores'])->name('agregar_actores');
Route::post('/guardar_actores', [PrincipalController::class, 'guardar_actores'])->name('guardar_actores');
Route::get('/editar_actores/{actor}', [PrincipalController::class, 'editar_actores'])->name('editar_actores');
Route::put('/actualizar_actores/{actor}', [PrincipalController::class, 'actualizar_actores'])->name('actualizar_actores');
Route::delete('/borrar_actores/{actor}', [PrincipalController::class, 'borrar_actores'])->name('borrar_actores');

Route::get('/ordenar/{orden}', [PrincipalController::class, 'ordenar'])->name('ordenar');
Route::get('/ordenar_2/{orden2}', [PrincipalController::class, 'ordenar_2'])->name('ordenar_2');
