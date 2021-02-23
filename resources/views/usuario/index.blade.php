@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                             Usuarios
                            <a href="{{ route('usuario.create') }}" class="btn btn-primary pull-right">Crear Usuario
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table-bordered">
                            <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>E-mail</th>
                            <th>Direccion</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->apellido }}</td>
                                    <td>{{ $usuario->telefono }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->direccion }}</td>
                                    <td>
                                        <a class="btn btn-link" href="{{ route('usuario.show' ,[$usuario->id]) }}"><i
                                                    class="material-icons  btn btn-sm btn-primary">remove_red_eye</i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-link" href="{{ route('usuario.edit' ,[$usuario->id]) }}"><i
                                                    class="material-icons btn btn-sm btn-success">mode_edit</i></a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['usuario.destroy', $usuario->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-link">
                                            <i class="material-icons btn btn-sm btn-danger ">delete</i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        &nbsp;
                        {{ $usuarios ?? ''->links()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection