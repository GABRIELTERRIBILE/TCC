@extends('layout')


    @include('erros', ['errors' => $errors])
<body>
    <form method="post">
        @csrf
        <div class="form-group">
            <img  src="{!! asset('images/1logoalumidex.jpg') !!}">
            <br><br>
            <br><br>
            <h1></h1>
            <input type="email" name="email" placeholder="e-mail" id="email" required class="form-group">
            <br><br>
            <input type="password" name="password" id="password" placeholder="senha" required min="1"  class="form-group">
            <br><br>

            <button  class="btn btn-primary btn-lg btn-block">Entrar</button>
            <a href="/registrar" class="btn btn-secondary btn-lg btn-block" role="button">Registrar</a>

        </div>
    </form>
</body>

