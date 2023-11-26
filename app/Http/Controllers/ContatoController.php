<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function principal() {
        $titulo = 'Contato';
        return view('site.contato', compact('titulo'));
    }
}
