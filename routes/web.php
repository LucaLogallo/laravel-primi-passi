<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

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

Route::get('/HelloWorld', function () {
    return view('HelloWorld');
});

Route::get('/Dati', function () {
    $dati = [
        "penne" =>[
            "penna0" =>[
                "tipo" => "sfera",
                "materiale" => "plastica",
                "livello_popolarita" => "alta",
                "costo" => "basso"
            ],
            "penna1" =>[
                "tipo" => "roller",
                "materiale" => "plastica",
                "livello_popolarita" => "medio-alta",
                "costo" => "basso"
            ],
            "penna2" =>[
                "tipo" => "gel",
                "materiale" => "plastica",
                "livello_popolarita" => "medio-alta",
                "costo" => "medio-basso"
            ],
            "penna3" =>[
                "tipo" => "stilografica",
                "materiale" => "alluminio",
                "livello_popolarita" => "medio-bassa",
                "costo" => "alto"
            ]
        ]
    ];
    return view('Dati', $dati);
});