<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $x, int $y){
        echo '<h1>Passagem de parametros da rota para o controlador</h1><br>';
        echo '<p>A soma de ' .$x. ' + ' .$y. ' é: ' . ($x+$y) . '</p>';
    }
}
