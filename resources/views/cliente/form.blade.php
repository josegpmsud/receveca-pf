<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nac" class="form-label">{{ __('Nac') }}</label>
            <input type="text" name="nac" class="form-control @error('nac') is-invalid @enderror" value="{{ old('nac', $cliente?->nac) }}" id="nac" placeholder="Nac">
            {!! $errors->first('nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $cliente?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido" class="form-label">{{ __('Apellido') }}</label>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $cliente?->apellido) }}" id="apellido" placeholder="Apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cedula_rif" class="form-label">{{ __('Cedula Rif') }}</label>
            <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" value="{{ old('cedula_rif', $cliente?->cedula_rif) }}" id="cedula_rif" placeholder="Cedula Rif">
            {!! $errors->first('cedula_rif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="b_nac" class="form-label">{{ __('B Nac') }}</label>
            <input type="text" name="b_nac" class="form-control @error('b_nac') is-invalid @enderror" value="{{ old('b_nac', $cliente?->b_nac) }}" id="b_nac" placeholder="B Nac">
            {!! $errors->first('b_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="b_nombre" class="form-label">{{ __('B Nombre') }}</label>
            <input type="text" name="b_nombre" class="form-control @error('b_nombre') is-invalid @enderror" value="{{ old('b_nombre', $cliente?->b_nombre) }}" id="b_nombre" placeholder="B Nombre">
            {!! $errors->first('b_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="b_apellido" class="form-label">{{ __('B Apellido') }}</label>
            <input type="text" name="b_apellido" class="form-control @error('b_apellido') is-invalid @enderror" value="{{ old('b_apellido', $cliente?->b_apellido) }}" id="b_apellido" placeholder="B Apellido">
            {!! $errors->first('b_apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="b_cedula" class="form-label">{{ __('B Cedula') }}</label>
            <input type="text" name="b_cedula" class="form-control @error('b_cedula') is-invalid @enderror" value="{{ old('b_cedula', $cliente?->b_cedula) }}" id="b_cedula" placeholder="B Cedula">
            {!! $errors->first('b_cedula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $cliente?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $cliente?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $cliente?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>