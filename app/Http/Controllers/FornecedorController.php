<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0001-00',
                'ddd' => '11',
                'telefone' => '988776655',
            ],
            [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => NULL,
                'ddd' => '85',
                'telefone' => '944332211',
            ],
            [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '00.000.000/0003-00',
                'ddd' => '32',
                'telefone' => '997654321',
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
