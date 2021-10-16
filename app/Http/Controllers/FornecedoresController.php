<?php


namespace App\Http\Controllers;

use App\fornecedores;
use Illuminate\Http\Request;


class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            'SICOOB',
            'CEQ RENTAL',
            'IACC PRÉ MOLDADOS E CONSTRUÇÕES'
        ];

        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {

        $nome = $request->nome;
        $fornecedores = new fornecedores();
        $fornecedores->nome = $nome;
        var_dump($fornecedores->save());
    }
}
