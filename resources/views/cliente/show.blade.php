@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show') . " " . __('Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nac:</strong>
                                    {{ $cliente->nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $cliente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $cliente->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cedula Rif:</strong>
                                    {{ $cliente->cedula_rif }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Nac:</strong>
                                    {{ $cliente->b_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Nombre:</strong>
                                    {{ $cliente->b_nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Apellido:</strong>
                                    {{ $cliente->b_apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>B Cedula:</strong>
                                    {{ $cliente->b_cedula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $cliente->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $cliente->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $cliente->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
