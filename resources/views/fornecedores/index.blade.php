@extends('layout')
@section('cabecalho')
Fornecedores
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/fornecedores/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($fornecedores as $fornecedores)
            <li class="list-group-item d-flex justify-content-between align-content-lg-center">
                {{ $fornecedores->nome }}
                <form method="post" action="/fornecedores/{{ $fornecedores->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $fornecedores->nome )}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i>
                </form>
            </li>

        @endforeach
    </ul>
@endsection
