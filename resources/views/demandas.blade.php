@extends('home')

@section('cabecalho')
    DEMANDAS
@endsection
@section('conteudo')
            <div class="tile">
                <h3 class="tile-title">Listagem de demandas</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Setor</th>
                            <th>status</th>
                            <th>prioridade</th>
                            <th>Data</th>
                            <th>Emitente</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection
