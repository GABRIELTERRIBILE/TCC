@extends('home')
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

    <div class="list-group">
        @foreach($fornecedores as $fornecedores)
            <li class="list-group-item d-flex justify-content-between align-content-lg-center">
                {{ $fornecedores->nome }}
                <span class="d-flex">
                    <a  href="/fornecedores/{{$fornecedores->id}}/edit"  class="btn btn-info btn-sm mr-1">
                        <i class="far fa-edit"></i>
                    </a>
                <form method="post" action="/fornecedores/{{ $fornecedores->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $fornecedores->nome )}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                </form>
            </li>

        @endforeach
    </div>
@endsection
