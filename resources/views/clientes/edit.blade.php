@extends('home')
@section('cabecalho')
    Editar cliente
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



    <form action="{{url("clientes/$clientes->id")}}" method="post" name="formEdit" id="formEdit">
        <input type="hidden" name="id" id="id" value="{{$clientes->id ?? ''}}">
        @csrf
        {{--        <div class="form-group">--}}
        {{--            <img src="imagemusuario" alt="..." class="img-thumbnail">--}}
        {{--        </div>--}}
        {{--        <div class="form-group">--}}
        {{--            <label for="image">Selecione a foto:</label>--}}
        {{--            <input type="file"  name="photo" class="form-control-file">--}}
        {{--        </div>--}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$clientes->nome ?? ''}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="E-mail">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$clientes->email ?? ''}}">
            </div>
            <div class="form-group col-md-6">
                <label for="Telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="Telefone" placeholder="Telefone" required value="{{$clientes->Telefone ?? ''}}">
            </div>

            <div class="form-group">
                <label for="Endereço">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua olavo, nº 2" value="" size="10" maxlength="9" required value="{{$clientes->endereco ?? ''}}">
            </div>

            <div class="form-group">
                <label for="CNPJ">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" id="CNPJ" placeholder="CNPJ" value="" size="10" maxlength="9" required value="{{$clientes->cnpj ?? ''}}">
            </div>

            <div class="form-group">
                <label for="CPF">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="cpf" value="" size="10" maxlength="9" required value="{{$clientes->cpf ?? ''}}">
            </div>

            <div class="form-group">
                <label for="cidade">cidade</label>
                <input name="cidades" id="cidades" class="form-control" size="2" value="{{$clientes->cidades ?? ''}}">
            </div>


            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input name="estados" id="cidades" class="form-control" value="{{$clientes->estados ?? ''}}">
            </div>

            <div class="form-group col-md-2">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" name="cep" id="CEP" value="" size="10" maxlength="9" required value="{{$clientes->cep ?? ''}}">
            </div>

            <div class="form-group">
                <label for="nome">Observação</label>
                <input type="text" class="form-control" name="obs" id="obs" value="" size="10" maxlength="9" required value="{{$clientes->obs ?? ''}}">
            </div>

        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
        <button href="/clientes" class="btn btn-secondary">Cancelar</button>

    </form>
@endsection
