@extends('home')
@section('cabecalho')
    Adicionar Fornecedores
@endsection

@section('conteudo')
    @include('erros', ['errors'=> $errors])

    <form action="/fornecedores/criar" method="post">
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
                <label for="Telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="Telefone" placeholder="Telefone">
            </div>
        </div>

        <div class="form-group">
            <label for="Endereço">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="Endereco" placeholder="Rua olavo, nº 2">
        </div>
        <div class="form-group">
            <label for="CNPJ">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" id="CNPJ" placeholder="CNPJ">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="Estado">Estado</label>
                <input name="estado" id="Estado" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" name="cep" id="CEP">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
@endsection
