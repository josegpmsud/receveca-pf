@extends('layouts.app')

@section('template_title')
    Plans
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Plans') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Ter Muerte</th>
									<th >Ter Invalidez</th>
									<th >Ter Medicos</th>
									<th >Ocu Muerte</th>
									<th >Ocu Invalidez</th>
									<th >Ocu Medicos</th>
									<th >Danos</th>
									<th >Materiales</th>
									<th >Legal</th>
									<th >Limites</th>
									<th >Funerarios</th>
									<th >Grua</th>
									<th >Indem</th>
									<th >Extra</th>
									<th >Valor</th>
									<th >Descripcion</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $plan->ter_muerte }}</td>
										<td >{{ $plan->ter_invalidez }}</td>
										<td >{{ $plan->ter_medicos }}</td>
										<td >{{ $plan->ocu_muerte }}</td>
										<td >{{ $plan->ocu_invalidez }}</td>
										<td >{{ $plan->ocu_medicos }}</td>
										<td >{{ $plan->danos }}</td>
										<td >{{ $plan->materiales }}</td>
										<td >{{ $plan->legal }}</td>
										<td >{{ $plan->limites }}</td>
										<td >{{ $plan->funerarios }}</td>
										<td >{{ $plan->grua }}</td>
										<td >{{ $plan->indem }}</td>
										<td >{{ $plan->extra }}</td>
										<td >{{ $plan->valor }}</td>
										<td >{{ $plan->descripcion }}</td>
										<td >{{ $plan->estado }}</td>

                                            <td>
                                                <form action="{{ route('plans.destroy', $plan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plans.show', $plan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plans.edit', $plan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $plans->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
