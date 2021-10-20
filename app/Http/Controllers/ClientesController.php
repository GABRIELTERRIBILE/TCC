<?php


namespace App\Http\Controllers;

use App\clientes;
use App\Http\Requests\ClienteFormRequest;
use Illuminate\Http\Request;


class ClientesController extends Controller
{
    public function index(Request $request) {
        $clientes = clientes::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');


        return view('clientes.index', compact('clientes', 'mensagem'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(ClienteFormRequest $request)
    {
//        dd($request->all());
        $clientes = clientes::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Fornecedor {$clientes->nome} cadastrado com sucesso "
            );


        return redirect('/clientes');
    }

    public function destroy (Request $request)

    {

        clientes::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "cliente removido com sucesso"
            );

        return redirect('/clientes');

    }
}

;
