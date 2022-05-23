<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises', function() {
    $paises = [
        "Colombia"=>[
            "cap" => "Bogota",
            "mon" => "Peso",
            "pob" =>51,
            "ciu" => [
                "Medellin",
                "Cali",
                "Pereira",
                "Barranquilla"
            ]
        ],
        "Argentina"=>[
            "cap" => "Buenos Aires",
            "mon" => "Peso Argentino",
            "pob" =>45.3,
            "ciu" => [
                "Cordoba",
                "La Matanza",
                "Santa Fe"
            ]
        ],
        "Japon" => [
            "cap" => "Tokio",
            "mon" => "Yen Japones",
            "pob" => 125,8,
            "ciu" => [
                "Kioto",
                "Yohohama",
                "Osaka",
                "Hiroshima",
                "Kanto",
                "Toyama"
            ]
        ]
    ];


    return view('paises')
    ->with('paises', $paises);
});

Route::get('prueba', function(){
    //seleccionar marcas:
    $marcas = Marca::all();
    //seleccionar categorias:
    $categoria = Categoria::all();
    //ingresar marcas y categorias a la vista

    return view('productos.create')
        ->with('categorias' , $categoria)
        ->with('marcas', $marcas);

});
//Rutas REST
Route::resource('productos', ProductoController::class);
