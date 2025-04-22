<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // importamos HasFactory para poder poblar la bbdd de manera simulada

class Genero extends Model
{
    use HasFactory;  // Usamos el trait HasFactory

    protected $fillable = ['nombre'];

    public function videojuegos(){
        return $this->belongsToMany(Videojuego::class, 'videojuego_genero');
    }
}
