@extends('layouts.app')

@section('template_title')
    Investigadore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Investigadore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('investigadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Grado</th>
										<th>Profesion</th>
										<th>Dni</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($investigadores as $investigadore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $investigadore->nombre }}</td>
											<td>{{ $investigadore->apellido }}</td>
											<td>{{ $investigadore->grado }}</td>
											<td>{{ $investigadore->profesion }}</td>
											<td>{{ $investigadore->dni }}</td>
											<td>{{ $investigadore->telefono }}</td>
											<td>{{ $investigadore->email }}</td>
											<td>{{ $investigadore->direccion }}</td>

                                            <td>
                                                <form action="{{ route('investigadores.destroy',$investigadore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('investigadores.show',$investigadore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('investigadores.edit',$investigadore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $investigadores->links() !!}
            </div>
        </div>
    </div>
@endsection
