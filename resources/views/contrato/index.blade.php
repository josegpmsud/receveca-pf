@extends('layouts.app')

@section('template_title')
    Contratos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contratos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contratos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Usuario</th>
									<th >Id Vehiculo</th>
									<th >Id Plan</th>
									<th >Fecha Ini</th>
									<th >Fecha Fin</th>
									<th >Codigo</th>
									<th >Cobertura</th>
									<th >Pago</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contratos as $contrato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $contrato->id_usuario }}</td>
										<td >{{ $contrato->id_vehiculo }}</td>
										<td >{{ $contrato->id_plan }}</td>
										<td >{{ $contrato->fecha_ini }}</td>
										<td >{{ $contrato->fecha_fin }}</td>
										<td >{{ $contrato->codigo }}</td>
										<td >{{ $contrato->cobertura }}</td>
										<td >{{ $contrato->pago }}</td>
										<td >{{ $contrato->estado }}</td>

                                            <td>
                                                <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contratos.show', $contrato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contratos.edit', $contrato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contratos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
