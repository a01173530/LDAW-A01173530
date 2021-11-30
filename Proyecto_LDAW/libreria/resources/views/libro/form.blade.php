<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ISBN') }}
            {{ Form::text('ISBN', $libro->ISBN, ['class' => 'form-control' . ($errors->has('ISBN') ? ' is-invalid' : ''), 'placeholder' => 'ISBN']) }}
            {!! $errors->first('ISBN', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Titulo') }}
            {{ Form::text('Titulo', $libro->Titulo, ['class' => 'form-control' . ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Autor') }}
            {{ Form::text('Autor', $libro->Autor, ['class' => 'form-control' . ($errors->has('Autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('Autor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año de publicación') }}
            {{ Form::text('AnoPublicacion', $libro->AnoPublicacion, ['class' => 'form-control' . ($errors->has('AnoPublicacion') ? ' is-invalid' : ''), 'placeholder' => 'Año de publicación']) }}
            {!! $errors->first('AnoPublicacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Páginas') }}
            {{ Form::text('Paginas', $libro->Paginas, ['class' => 'form-control' . ($errors->has('Paginas') ? ' is-invalid' : ''), 'placeholder' => 'Paginas']) }}
            {!! $errors->first('Paginas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Editorial') }}
            {{ Form::text('Editorial', $libro->Editorial, ['class' => 'form-control' . ($errors->has('Editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('Editorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar de publicación') }}
            {{ Form::text('LugarPublicacion', $libro->LugarPublicacion, ['class' => 'form-control' . ($errors->has('LugarPublicacion') ? ' is-invalid' : ''), 'placeholder' => 'Lugar de publicación']) }}
            {!! $errors->first('LugarPublicacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Categoría del libro') }}
            {{ Form::select('categoria_id',$categorias , $libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>