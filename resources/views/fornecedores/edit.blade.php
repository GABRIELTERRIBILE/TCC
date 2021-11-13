@extends('home')
@section('cabecalho')
    Editar fornecedor
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



    <form action="{{url("fornecedores/$fornecedores->id")}}" method="post" name="formEdit" id="formEdit">
        <input type="hidden" name="id" id="id" value="{{$fornecedores->id ?? ''}}">
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
            <input type="text" class="form-control" name="nome" id="nome" value="{{$fornecedores->nome ?? ''}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="E-mail">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$fornecedores->email ?? ''}}">
            </div>
            <div class="form-group col-md-6">
                <label for="Telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="Telefone" placeholder="Telefone" required value="{{$fornecedores->Telefone ?? ''}}">
            </div>

            <div class="form-group col-md-2">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" value="" size="10" maxlength="9" required value="{{$fornecedores->cep ?? ''}}">
            </div>

            <div class="form-group">
                <label for="rua">rua</label>
                <input name="rua" type="text" id="rua" class="form-control" size="60" value="{{$fornecedores->rua ?? ''}}">
            </div>

            <div class="form-group">
                <label for="bairro">bairro</label>
                <input name="bairro" type="text" id="bairro" class="form-control" size="40" value="{{$fornecedores->bairro ?? ''}}">
            </div>

            <div class="form-group">
                <label for="cidade">cidade</label>
                <input name="cidade" id="cidade" class="form-control" size="2" value="{{$fornecedores->cidade ?? ''}}">
            </div>


            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input name="estado" id="uf" class="form-control" value="{{$fornecedores->estado ?? ''}}">
            </div>

        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
        <button href="/fornecedores" class="btn btn-secondary">Cancelar</button>

    </form>
@endsection
