@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ISBN:</strong>
                            {{ $libro->ISBN }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->Titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->Autor }}
                        </div>
                        <div class="form-group">
                            <strong>Año de publicación:</strong>
                            {{ $libro->AnoPublicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Páginas:</strong>
                            {{ $libro->Paginas }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->Editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar de publicación:</strong>
                            {{ $libro->LugarPublicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $libro->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
