<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la categoría') }}
            {{ Form::text('nombreCategoria', $categoria->nombreCategoria, ['class' => 'form-control' . ($errors->has('nombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre categoria']) }}
            {!! $errors->first('nombreCategoria', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>