@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Demanda') }}</div>

                    <div id="app" class="card-body">
                        <demandas-component></demandas-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
