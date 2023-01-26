<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $x, int $y){
        
        $soma = ($x+$y);

        // return view('site.teste', ['soma' => $soma, 'n1'=> $x, 'n2'=> $y] );

        // return view('site.teste', compact('x', 'y', 'soma'));
        
        return view('site.teste')->with('x', $x)->with('y', $y)->with('soma', $soma);

    }
}
