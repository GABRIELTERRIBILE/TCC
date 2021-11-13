@extends('home')
@section('cabecalho')
    Adicionar Estoque
@endsection

@section('conteudo')
    @include('erros', ['errors'=> $errors])

    <form action="/estoque/criar" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome produto</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantidade">quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="quantidade">
            </div>
            <div class="form-group col-md-6">
                <label for="preco">preço</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço">
            </div>
        </div>

        <div class="form-group">
            <label for="endereco_estoque">Endereço no Estoque</label>
            <input type="text" class="form-control" name="endereco_estoque" id="endereco_estoque" placeholder="Partilheira 1A">
        </div>
        <div class="form-group">
            <label for="CNPJ">data de entrada</label>
            <input type="text" class="form-control" name="data_entrada" id="data_entrada" placeholder="01/01/2021">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="obs">Obs</label>
                <input type="text" class="form-control" name="obs" id="obs">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
@endsection
