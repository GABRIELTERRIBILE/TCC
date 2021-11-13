@extends('home')
@section('cabecalho')
    Estoque
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/estoque/criar" class="btn btn-dark mb-2">Adicionar</a>

    <div class="list-group">
        @foreach($Estoque as $Estoque)
            <li class="list-group-item d-flex justify-content-between align-content-lg-center">
                {{ $Estoque->nome }}
                <span class="d-flex">
                    <a  href="/estoque/{{$Estoque->id}}/edit"  class="btn btn-info btn-sm mr-1">
                        <i class="far fa-edit"></i>
                    </a>
                <form method="post" action="/estoque/{{ $Estoque->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $Estoque->nome )}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                </form>
            </li>


        @endforeach
    </div>
@endsection
