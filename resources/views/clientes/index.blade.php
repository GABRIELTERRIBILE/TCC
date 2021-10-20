@extends('layout')
@section('cabecalho')
    Clientes
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/clientes/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($clientes as $clientes)
            <li class="list-group-item d-flex justify-content-between align-content-lg-center">
                {{ $clientes->nome }}
                <form method="post" action="/fornecedores/{{ $clientes->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $clientes->nome )}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i>
                </form>
            </li>

        @endforeach
    </ul>
@endsection
