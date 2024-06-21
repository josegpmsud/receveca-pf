@extends('layouts.app')

@section('template_title')
    {{ $plan->name ?? __('Show') . " " . __('Plan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('plans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Ter Muerte:</strong>
                                    {{ $plan->ter_muerte }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ter Invalidez:</strong>
                                    {{ $plan->ter_invalidez }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ter Medicos:</strong>
                                    {{ $plan->ter_medicos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ocu Muerte:</strong>
                                    {{ $plan->ocu_muerte }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ocu Invalidez:</strong>
                                    {{ $plan->ocu_invalidez }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ocu Medicos:</strong>
                                    {{ $plan->ocu_medicos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Danos:</strong>
                                    {{ $plan->danos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Materiales:</strong>
                                    {{ $plan->materiales }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Legal:</strong>
                                    {{ $plan->legal }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Limites:</strong>
                                    {{ $plan->limites }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Funerarios:</strong>
                                    {{ $plan->funerarios }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Grua:</strong>
                                    {{ $plan->grua }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Indem:</strong>
                                    {{ $plan->indem }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Extra:</strong>
                                    {{ $plan->extra }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor:</strong>
                                    {{ $plan->valor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $plan->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $plan->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
