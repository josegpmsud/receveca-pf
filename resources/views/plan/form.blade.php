<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="ter_muerte" class="form-label">{{ __('Ter Muerte') }}</label>
            <input type="text" name="ter_muerte" class="form-control @error('ter_muerte') is-invalid @enderror" value="{{ old('ter_muerte', $plan?->ter_muerte) }}" id="ter_muerte" placeholder="Ter Muerte">
            {!! $errors->first('ter_muerte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ter_invalidez" class="form-label">{{ __('Ter Invalidez') }}</label>
            <input type="text" name="ter_invalidez" class="form-control @error('ter_invalidez') is-invalid @enderror" value="{{ old('ter_invalidez', $plan?->ter_invalidez) }}" id="ter_invalidez" placeholder="Ter Invalidez">
            {!! $errors->first('ter_invalidez', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ter_medicos" class="form-label">{{ __('Ter Medicos') }}</label>
            <input type="text" name="ter_medicos" class="form-control @error('ter_medicos') is-invalid @enderror" value="{{ old('ter_medicos', $plan?->ter_medicos) }}" id="ter_medicos" placeholder="Ter Medicos">
            {!! $errors->first('ter_medicos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ocu_muerte" class="form-label">{{ __('Ocu Muerte') }}</label>
            <input type="text" name="ocu_muerte" class="form-control @error('ocu_muerte') is-invalid @enderror" value="{{ old('ocu_muerte', $plan?->ocu_muerte) }}" id="ocu_muerte" placeholder="Ocu Muerte">
            {!! $errors->first('ocu_muerte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ocu_invalidez" class="form-label">{{ __('Ocu Invalidez') }}</label>
            <input type="text" name="ocu_invalidez" class="form-control @error('ocu_invalidez') is-invalid @enderror" value="{{ old('ocu_invalidez', $plan?->ocu_invalidez) }}" id="ocu_invalidez" placeholder="Ocu Invalidez">
            {!! $errors->first('ocu_invalidez', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ocu_medicos" class="form-label">{{ __('Ocu Medicos') }}</label>
            <input type="text" name="ocu_medicos" class="form-control @error('ocu_medicos') is-invalid @enderror" value="{{ old('ocu_medicos', $plan?->ocu_medicos) }}" id="ocu_medicos" placeholder="Ocu Medicos">
            {!! $errors->first('ocu_medicos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="danos" class="form-label">{{ __('Danos') }}</label>
            <input type="text" name="danos" class="form-control @error('danos') is-invalid @enderror" value="{{ old('danos', $plan?->danos) }}" id="danos" placeholder="Danos">
            {!! $errors->first('danos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="materiales" class="form-label">{{ __('Materiales') }}</label>
            <input type="text" name="materiales" class="form-control @error('materiales') is-invalid @enderror" value="{{ old('materiales', $plan?->materiales) }}" id="materiales" placeholder="Materiales">
            {!! $errors->first('materiales', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="legal" class="form-label">{{ __('Legal') }}</label>
            <input type="text" name="legal" class="form-control @error('legal') is-invalid @enderror" value="{{ old('legal', $plan?->legal) }}" id="legal" placeholder="Legal">
            {!! $errors->first('legal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="limites" class="form-label">{{ __('Limites') }}</label>
            <input type="text" name="limites" class="form-control @error('limites') is-invalid @enderror" value="{{ old('limites', $plan?->limites) }}" id="limites" placeholder="Limites">
            {!! $errors->first('limites', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="funerarios" class="form-label">{{ __('Funerarios') }}</label>
            <input type="text" name="funerarios" class="form-control @error('funerarios') is-invalid @enderror" value="{{ old('funerarios', $plan?->funerarios) }}" id="funerarios" placeholder="Funerarios">
            {!! $errors->first('funerarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grua" class="form-label">{{ __('Grua') }}</label>
            <input type="text" name="grua" class="form-control @error('grua') is-invalid @enderror" value="{{ old('grua', $plan?->grua) }}" id="grua" placeholder="Grua">
            {!! $errors->first('grua', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="indem" class="form-label">{{ __('Indem') }}</label>
            <input type="text" name="indem" class="form-control @error('indem') is-invalid @enderror" value="{{ old('indem', $plan?->indem) }}" id="indem" placeholder="Indem">
            {!! $errors->first('indem', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="extra" class="form-label">{{ __('Extra') }}</label>
            <input type="text" name="extra" class="form-control @error('extra') is-invalid @enderror" value="{{ old('extra', $plan?->extra) }}" id="extra" placeholder="Extra">
            {!! $errors->first('extra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor" class="form-label">{{ __('Valor') }}</label>
            <input type="text" name="valor" class="form-control @error('valor') is-invalid @enderror" value="{{ old('valor', $plan?->valor) }}" id="valor" placeholder="Valor">
            {!! $errors->first('valor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $plan?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $plan?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>