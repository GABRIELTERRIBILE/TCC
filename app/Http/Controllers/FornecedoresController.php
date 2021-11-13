<?php


namespace App\Http\Controllers;

use App\Fornecedores;
use App\Http\Requests\FornecedorFormRequest;
use Illuminate\Http\Request;


class FornecedoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request) {
        $fornecedores = Fornecedores::query()
                ->orderBy('nome')
                ->get();
        $mensagem = $request->session()->get('mensagem');


        return view('fornecedores.index', compact('fornecedores', 'mensagem'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(FornecedorFormRequest $request)
    {
//        dd($request->all());
        $fornecedores = fornecedores::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Fornecedor {$fornecedores->nome} cadastrado com sucesso "
            );


        return redirect('/fornecedores');
    }

    public function destroy (Request $request)

    {

        Fornecedores::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Fornecedor removido com sucesso"
            );

        return redirect('/fornecedores');

    }
    public function getEdit($id)
    {
        $fornecedores= fornecedores::find($id);
        return view('fornecedores.edit')->with('fornecedores',$fornecedores);
    }

    public function storeEdit(Request $request)
    {
        $dados = $request->all();

        $update = fornecedores::find($dados['id']);

        $update->update($dados);

        $request->session()
            ->flash(
                'mensagem',
                "fornecedor atualizado com sucesso! "
            );


        return redirect ('/fornecedores');


    }

    public function update(FornecedorFormRequest $request, $id)
    {
        $this->fornecedores->where(['id'=>$id])->update([
        ]);

        return redirect('/fornecedores');
    }
}

;
