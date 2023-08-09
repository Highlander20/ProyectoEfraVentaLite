@extends('layouts.app')

@section('template_title')
    {{ $investigadore->name ?? "{{ __('Show') Investigadore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Investigadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('investigadores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $investigadore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $investigadore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $investigadore->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $investigadore->profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $investigadore->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $investigadore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $investigadore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $investigadore->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
