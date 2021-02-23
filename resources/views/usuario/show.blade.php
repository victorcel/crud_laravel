@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">	<h2>
                            Ver Usuario
                            <a href="{{ route('usuario.index') }}" class="btn btn-primary pull-right">Regresar
                            </a>
                        </h2></div>

                    <div class="card-body">
                        <p>{{ $usuario->nombre }}</p>
                        <p>{{ $usuario->apellido }}</p>
                        <p>{{ $usuario->telefono }}</p>
                        <p>{{ $usuario->email }}</p>
                        <p>{{ $usuario->direccion }}</p>
                        <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-primary">
                            Editar
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection