<?php

use Illuminate\Support\Facades\Route;

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
