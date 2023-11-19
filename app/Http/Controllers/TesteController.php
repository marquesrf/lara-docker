<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        $soma = $p1 + $p2;
        // Passando os parâmetros para uma view.
        return view('site.teste', compact('soma'));
    }
}
