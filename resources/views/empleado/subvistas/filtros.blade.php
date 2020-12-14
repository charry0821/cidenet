<div class="form-row">
    <div class="form-group col-md-2">
        {{ Form::label('primer_apellido', 'Primer apellido', ['class' => '']) }}
        {{ Form::text('primer_apellido', null, [
            'class' => 'form-control',
            'maxlength' => 20,
            'placeholder'=>'Primer apellido',
        ]) }}
        @if ($errors->has('primer_apellido'))
            <span class="text-danger">{{ $errors->first('primer_apellido') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('segundo_apellido', 'Segundo apellido', ['class' => '']) }}
        {{ Form::text('segundo_apellido', null, [
                'class' => 'form-control',
                'maxlength' => 20,
                'placeholder' => 'Segundo apellido']) }}
        @if ($errors->has('segundo_apellido'))
            <span class="text-danger">{{ $errors->first('segundo_apellido') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('primer_nombre', 'Primer nombre', ['class' => '']) }}
        {{ Form::text('primer_nombre', null, [
            'class' => 'form-control',
            'maxlength' => 20,
            'placeholder'=>'Primer nombre',
        ]) }}
        @if ($errors->has('primer_nombre'))
            <span class="text-danger">{{ $errors->first('primer_nombre') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('otro_nombre', 'Otros nombres', ['class' => '']) }}
        {{ Form::text('otro_nombre', null, [
                'class' => 'form-control',
                'maxlength' => 50,
                'placeholder'=>'Otros nombres',]) }}
        @if ($errors->has('otro_nombre'))
            <span class="text-danger">{{ $errors->first('otro_nombre') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('tipo_identificacion','Tipo de identificación', ['class' => '']) }}
        {{ Form::select('tipo_identificacion', $tipoIdentificaciones, null, [
                'class' => 'form-control',
                'placeholder' => 'Seleccione']) }}
        @if ($errors->has('tipo_identificacion'))
            <span class="text-danger">{{ $errors->first('tipo_identificacion') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2">
        {{ Form::label('numero_identificacion', 'Otros nombres', ['class' => '']) }}
        {{ Form::text('numero_identificacion', null, [
                'class' => 'form-control',
                'maxlength' => 20,
                'placeholder'=>'Identificación',]) }}
        @if ($errors->has('numero_identificacion'))
            <span class="text-danger">{{ $errors->first('numero_identificacion') }}</span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        {{ Form::label('correo', 'Correo', ['class' => '']) }}
        {{ Form::text('correo', null, [
                'class' => 'form-control',
                'maxlength' => 300,
                'placeholder'=>'Correo',]) }}
        @if ($errors->has('correo'))
            <span class="text-danger">{{ $errors->first('correo') }}</span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('pais','País', ['class' => '']) }}
        {{ Form::select('pais', $paises, null, [
                'class' => 'form-control',
                'placeholder' => 'Seleccione']) }}
        @if ($errors->has('pais'))
            <span class="text-danger">{{ $errors->first('pais') }}</span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('estado','Estado', ['class' => '']) }}
        {{ Form::select('estado', $estados, null, [
                'class' => 'form-control',
                'placeholder' => 'Seleccione']) }}
        @if ($errors->has('estado'))
            <span class="text-danger">{{ $errors->first('estado') }}</span>
        @endif
    </div>
    <div style="align-content: end; display: grid;" class="form-group col-sm-1">
        <button type="button" class="btn btn-success" id="limpiar">
            <i class="fa fa-eraser"></i> Limpiar
        </button>
    </div>
    <div style="align-content: end; display: grid;" class="form-group col-sm-1">
        <button type="button" class="btn btn-primary" id="filtrar">
            <i class="fa fa-filter"></i> Filtrar
        </button>
    </div>
</div>