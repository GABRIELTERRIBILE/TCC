@extends('home')
@section('cabecalho')
    Editar Estoque
@endsection

@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{url("estoque/$estoque->id")}}" method="post" name="formEdit" id="formEdit">
        <input type="hidden" name="id" id="id" value="{{$estoque->id ?? ''}}">
        @csrf
        <div class="form-group">
            <label for="nome">nome produto</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$estoque->nome ?? ''}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantidade">quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="quantidade" value="{{$estoque->quantidade ?? ''}}">
            </div>
            <div class="form-group col-md-6">
                <label for="preco">preço</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" value="{{$estoque->preco ?? ''}}">
            </div>
        </div>

        <div class="form-group">
            <label for="endereco_estoque">Endereço no Estoque</label>
            <input type="text" class="form-control" name="endereco_estoque" id="endereco_estoque" placeholder="Partilheira 1A" value="{{$estoque->endereco_estoque ?? ''}}">
        </div>
        <div class="form-group">
            <label for="CNPJ">data de entrada</label>
            <input type="text" class="form-control" name="data_entrada" id="data_entrada" placeholder="01/01/2021" value="{{$estoque->data_entrada ?? ''}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="obs">Obs</label>
                <input type="text" class="form-control" name="obs" id="obs" placeholder="observação" value="{{$estoque->obs ?? ''}}">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
        <button href="/estoque" class="btn btn-secondary">Cancelar</button>

    </form>
@endsection
