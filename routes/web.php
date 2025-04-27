<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\BBDDController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rutas principales
Route::controller(PaginaController::class)->group(function () {
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/sobre-nosotros', 'sobreNosotros')->name('sobre-nosotros');
});

// Rutas de ejemplo/demo
Route::controller(RutaController::class)->group(function () {
    Route::get('/hola', 'saludo')->name('saludo');
    Route::get('/juegos', 'mostrarJuegos')->name('juegos');
    Route::get('/juegos/{id}', 'mostrarJuegoID')->name('mostrarJuegoID');
});

// Rutas CRUD básicas
Route::controller(BBDDController::class)->group(function () {
    Route::get('/ver', 'ver')->name('ver');
    Route::get('/anadir', 'anadir')->name('anadir');
    Route::post('/guardar', 'guardar')->name('guardar');
});

// Rutas para géneros
Route::controller(EloquentController::class)->group(function () {
    Route::get('/generos', 'generos')->name('generos');
});

// Rutas CRUD avanzadas
Route::controller(CRUDController::class)->group(function () {
    // Rutas para edición
    Route::get('/editar', 'selectForEdit')->name('editar.select');
    Route::post('/procesar-edicion', 'processSelectForEdit')->name('editar.process');
    Route::get('/editar/{id}', 'edit')->name('editar.form');
    Route::match(['put', 'patch'], '/editar/{id}', 'update')->name('editar.update');
    
    // Rutas para borrado
    Route::get('/borrar', 'selectForDelete')->name('borrar.select');    
    Route::delete('/borrar', 'destroy')->name('borrar.destroy');
});

// Rutas de autenticación (manteniendo el grupo Auth pero con registro modificado)
Auth::routes(['register' => true]); // Desactivamos el registro por defecto

// Rutas personalizadas para registro con rol
Route::prefix('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Ruta home
Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');