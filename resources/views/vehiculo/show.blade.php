@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? __('Show') . " " . __('Vehiculo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('vehiculos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Cliente:</strong>
                                    {{ $vehiculo->id_cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Marca:</strong>
                                    {{ $vehiculo->id_marca }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Clase:</strong>
                                    {{ $vehiculo->id_clase }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Modelo:</strong>
                                    {{ $vehiculo->modelo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Color:</strong>
                                    {{ $vehiculo->id_color }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo:</strong>
                                    {{ $vehiculo->id_tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Uso:</strong>
                                    {{ $vehiculo->id_uso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Placa:</strong>
                                    {{ $vehiculo->placa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ano:</strong>
                                    {{ $vehiculo->ano }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Peso:</strong>
                                    {{ $vehiculo->peso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Serial Motor:</strong>
                                    {{ $vehiculo->serial_motor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Puestos:</strong>
                                    {{ $vehiculo->puestos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Serial Niv:</strong>
                                    {{ $vehiculo->serial_niv }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
