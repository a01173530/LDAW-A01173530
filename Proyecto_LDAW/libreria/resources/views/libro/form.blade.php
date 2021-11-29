<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ISBN') }}
            {{ Form::text('ISBN', $libro->ISBN, ['class' => 'form-control' . ($errors->has('ISBN') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
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
            {{ Form::label('AnoPublicacion') }}
            {{ Form::text('AnoPublicacion', $libro->AnoPublicacion, ['class' => 'form-control' . ($errors->has('AnoPublicacion') ? ' is-invalid' : ''), 'placeholder' => 'Anopublicacion']) }}
            {!! $errors->first('AnoPublicacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paginas') }}
            {{ Form::text('Paginas', $libro->Paginas, ['class' => 'form-control' . ($errors->has('Paginas') ? ' is-invalid' : ''), 'placeholder' => 'Paginas']) }}
            {!! $errors->first('Paginas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Editorial') }}
            {{ Form::text('Editorial', $libro->Editorial, ['class' => 'form-control' . ($errors->has('Editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('Editorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarPublicacion') }}
            {{ Form::text('LugarPublicacion', $libro->LugarPublicacion, ['class' => 'form-control' . ($errors->has('LugarPublicacion') ? ' is-invalid' : ''), 'placeholder' => 'Lugarpublicacion']) }}
            {!! $errors->first('LugarPublicacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id',$categorias , $libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>