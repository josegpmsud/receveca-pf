@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? __('Show') . " " . __('Contrato') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('contratos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $contrato->id_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Vehiculo:</strong>
                                    {{ $contrato->id_vehiculo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Plan:</strong>
                                    {{ $contrato->id_plan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Ini:</strong>
                                    {{ $contrato->fecha_ini }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Fin:</strong>
                                    {{ $contrato->fecha_fin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $contrato->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cobertura:</strong>
                                    {{ $contrato->cobertura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pago:</strong>
                                    {{ $contrato->pago }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $contrato->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
