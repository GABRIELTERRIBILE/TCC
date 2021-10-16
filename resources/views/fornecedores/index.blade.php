@extends('layout')
@section('cabecalho')
Fornecedores
@endsection

@section('conteudo')
    <a href="/fornecedores/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($fornecedores as $fornecedores)
        <li class="list-group-item"><?= $fornecedores; ?></li>
        <?php endforeach; ?>
    </ul>
@endsection
