@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? __('Show') . " " . __('Usuario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $usuario->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $usuario->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario:</strong>
                                    {{ $usuario->usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contrasena:</strong>
                                    {{ $usuario->contrasena }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Rol:</strong>
                                    {{ $usuario->id_rol }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $usuario->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
