<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'desarrollador', 'lanzamiento', 'url_cover'];

    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'videojuego_genero');
    }

}
