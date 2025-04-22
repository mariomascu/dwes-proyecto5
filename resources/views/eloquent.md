# Pasos para establecer la relación Muchos a Muchos (N:M) entre Videojuego y Genero

## 1. Crear la migración de la tabla pivote videojuego_genero

La tabla pivote videojuego_genero es esencial para establecer una relación Muchos a Muchos (N:M) entre Videojuego y Genero.

### Paso 1: Crear la migración de la tabla pivote

Ejecuta el siguiente comando para crear la migración:

```bash
php artisan make:migration create_videojuego_genero_table --create=videojuego_genero
```

### Paso 2: Definir la estructura de la tabla pivote

Abre la migración generada en database/migrations y define la estructura de la tabla:
```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('videojuego_genero', function (Blueprint $table) {
            $table->id();
            $table->foreignId('videojuego_id')->constrained()->onDelete('cascade');
            $table->foreignId('genero_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videojuego_genero');
    }
};
```

Aquí hemos creado una tabla pivote videojuego_genero con dos claves foráneas:

    - videojuego_id: hace referencia a la tabla videojuegos.
    - genero_id: hace referencia a la tabla generos.

Las claves foráneas están definidas con el método constrained(), que crea una relación con la tabla correspondiente, y hemos añadido onDelete('cascade') para que si un videojuego o género se elimina, también se eliminen las relaciones asociadas en la tabla pivote.

## 2. Definición de relaciones en los modelos

### Modelo Genero
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['nombre'];

    public function videojuegos()
    {
        return $this->belongsToMany(Videojuego::class, 'videojuego_genero');
    }
}
```

### Modelo Videojuego
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    protected $fillable = ['nombre', 'desarrollador', 'lanzamiento', 'url_cover'];

    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'videojuego_genero');
    }
}
```

## 3. Seeder para relaciones

```bash
php artisan make:seeder VideojuegoGeneroSeeder
```

### Implementación del Seeder
```php
namespace Database\Seeders;

use App\Models\Videojuego;
use App\Models\Genero;
use Illuminate\Database\Seeder;

class VideojuegoGeneroSeeder extends Seeder
{
    public function run(): void
    {
        $diablo = Videojuego::where('nombre', 'Diablo IV')->first();
        $zelda = Videojuego::where('nombre', 'The Legend of Zelda: Breath of the Wild')->first();
        $witcher = Videojuego::where('nombre', 'The Witcher 3')->first();

        $rpg = Genero::where('nombre', 'Action RPG')->first();
        $aventura = Genero::where('nombre', 'Action-Adventure')->first();
        $mundo_abierto = Genero::where('nombre', 'Mundo Abierto')->first();

        $diablo->generos()->attach([$rpg->id, $aventura->id]);
        $zelda->generos()->attach([$aventura->id, $mundo_abierto->id]);
        $witcher->generos()->attach([$rpg->id, $mundo_abierto->id]);
    }
}
```

## 4. Controlador para mostrar relaciones

```php
namespace App\Http\Controllers;

use App\Models\Genero;

class EloquentController extends Controller
{
    public function generos()
    {
        $generos = Genero::with('videojuegos')->get();
        return view('generos.index', compact('generos'));
    }
}
```

## 5. Vista para mostrar relaciones

```html
<!DOCTYPE html>
<html>
<head>
    <title>Géneros y Videojuegos</title>
</head>
<body>
    <h1>Géneros</h1>
    <ul>
        @foreach ($generos as $genero)
            <li>
                <h2>{{ $genero->nombre }}</h2>
                <h3>Videojuegos:</h3>
                <ul>
                    @foreach ($genero->videojuegos as $videojuego)
                        <li>{{ $videojuego->nombre }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
```

## 6. Configuración de rutas

```php
Route::controller(EloquentController::class)->group(function () {
    Route::get('/generos', 'generos')->name('generos');
});
```

## Comandos para implementación

```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeder
php artisan db:seed --class=VideojuegoGeneroSeeder
```

## Diagrama de relaciones

```php
   <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function videojuegos()
    {
        return $this->belongsToMany(Videojuego::class, 'videojuego_genero');
    }
}

```