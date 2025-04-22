<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('videojuego_genero', function (Blueprint $table) {
            $table->id();
            $table->foreignId('videojuego_id')->constrained()->onDelete('cascade'); // clave foránea que hace referencia a la tabla videojuegos.
            $table->foreignId('genero_id')->constrained()->onDelete('cascade'); // clave foránea que hace referencia a la tabla generos.
            $table->timestamps();
        });

        //El método constrained es el método que define la clave foránea
        //onDelete('cascade') me permite eliminar relaciones asociadas si un videojuego o género se elimina.
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuego_genero');
    }
};
