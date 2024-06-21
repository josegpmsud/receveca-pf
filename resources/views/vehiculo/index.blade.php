@extends('layouts.app')

@section('template_title')
    Vehiculos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Cliente</th>
									<th >Id Marca</th>
									<th >Id Clase</th>
									<th >Modelo</th>
									<th >Id Color</th>
									<th >Id Tipo</th>
									<th >Id Uso</th>
									<th >Placa</th>
									<th >Ano</th>
									<th >Peso</th>
									<th >Serial Motor</th>
									<th >Puestos</th>
									<th >Serial Niv</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $vehiculo->id_cliente }}</td>
										<td >{{ $vehiculo->id_marca }}</td>
										<td >{{ $vehiculo->id_clase }}</td>
										<td >{{ $vehiculo->modelo }}</td>
										<td >{{ $vehiculo->id_color }}</td>
										<td >{{ $vehiculo->id_tipo }}</td>
										<td >{{ $vehiculo->id_uso }}</td>
										<td >{{ $vehiculo->placa }}</td>
										<td >{{ $vehiculo->ano }}</td>
										<td >{{ $vehiculo->peso }}</td>
										<td >{{ $vehiculo->serial_motor }}</td>
										<td >{{ $vehiculo->puestos }}</td>
										<td >{{ $vehiculo->serial_niv }}</td>

                                            <td>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vehiculos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
