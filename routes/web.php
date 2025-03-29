<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\BBDDController;



//forma de agrupar mejor las rutas por controladores
Route::controller(PaginaController::class)->group(function (){
    Route::get('/', 'inicio') -> name('inicio');
    Route::get('/sobre-nosotros', 'sobreNosotros') -> name('sobre-nosotros');
});

Route::controller(RutaController::class)->group(function () {
    Route::get('/hola', 'saludo') -> name('saludo');
    Route::get('/juegos', 'mostrarJuegos') -> name('juegos');
    Route::get('/juegos/{id}', 'mostrarJuegoID') -> name('mostrarJuegoID');
});

Route::controller(BBDDController::class)->group(function () {
    Route::get('/ver', 'ver') -> name('ver');
    Route::get('/anadir', 'anadir') -> name('anadir');
    Route::get('/guardar', 'guardar') -> name('guardar');
});
