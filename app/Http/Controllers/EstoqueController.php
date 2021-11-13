<?php


namespace App\Http\Controllers;

use App\Estoque;
use App\Http\Requests\EstoqueFormRequest;
use Illuminate\Http\Request;


class EstoqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request) {
        $Estoque = Estoque::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');


        return view('estoque.index', compact('Estoque', 'mensagem'));
    }

    public function create()
    {
        return view('estoque.create');
    }

    public function store(EstoqueFormRequest $request)
    {
//        dd($request->all());
        $estoque = Estoque::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Produto {$estoque->nome} cadastrado com sucesso "
            );


        return redirect('/estoque');
    }

    public function destroy (Request $request)

    {

        Estoque::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Estoque removido com sucesso"
            );

        return redirect('/estoque');

    }
    public function getEdit($id)
    {
        $estoque= Estoque::find($id);
        return view('estoque.edit')->with('estoque',$estoque);
    }

    public function storeEdit(Request $request)
    {
        $dados = $request->all();

        $update = Estoque::find($dados['id']);

        $update->update($dados);

        $request->session()
            ->flash(
                'mensagem',
                "estoque atualizado com sucesso! "
            );


        return redirect ('/estoque');


    }

    public function update(Request $request, $id)
    {
        $this->estoque->where(['id'=>$id])->update([
        ]);

        return redirect('/estoque');
    }
}

;
