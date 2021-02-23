<div class="form-group">

    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    @error('nombre')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
    @error('apellido')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    @error('telefono')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @error('email')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
    @error('direccion')
    <span>
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
{{--
<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
               value="{{ $crud->nombre }}" required autocomplete="nombre">

        @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

    <div class="col-md-6">
        <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror"
               name="apellido"
               value="{{ $crud->apellido }}" required autocomplete="apellido">

        @error('apellido')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

    <div class="col-md-6">
        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"
               name="telefono"
               value="{{ $crud->telefono }}" required autocomplete="telefono">

        @error('telefono')
        <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
               value="{{ $crud->email }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

    <div class="col-md-6">
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror"
               name="direccion" value="{{ $crud->direccion }}" required autocomplete="direccion">

        @error('direccion')
        <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
--}}
</div>