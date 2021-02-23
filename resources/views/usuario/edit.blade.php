@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">	<h2>
                            Editar Usuario
                            <a href="{{ route('usuario.index') }}" class="btn btn-primary pull-right">	Regresar
                            </a>
                        </h2></div>

                    <div class="card-body">
                        {!! Form::model($usuario, ['route' => ['usuario.update', $usuario->id], 'method' => 'PUT']) !!}
                            @include('usuario.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection