@extends('home')
@section('cabecalho')
    Adicionar Cliente
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

    <form action="/clientes/criar" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="E-mail">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone">
            </div>
        </div>

        <div class="form-group">
            <label for="Endereço">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua olavo, nº 2">
        </div>

        <div class="form-group">
            <label for="CNPJ">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" id="CNPJ" placeholder="CNPJ">
        </div>

        <div class="form-group">
            <label for="CPF">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="cpf">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Cidade">Cidade</label>
                <input type="text" class="form-control" name="cidades" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="Estado">Estado</label>
                <input name="estados" id="estados" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" name="cep" id="CEP">
            </div>
            <div class="form-group">
                <label for="nome">Observação</label>
                <input type="text" class="form-control" name="obs" id="obs">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection
