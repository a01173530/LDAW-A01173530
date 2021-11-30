@extends('layouts.app')

@section('template_title')
    Libro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar libro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('libros.index') }}" method="get">
                            <div class="fom-row">
                                <div class="col-sm-4 my-1">
                                    <input type="text"class="form-control" name="texto" value="{{ $texto }}">
                                </div>
                                <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                                </div>
                            </div>
                        </form>
                    
                    </div >
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>ISBN</th>
										<th>Titulo</th>
										<th>Autor</th>
										<th>Año de publicación</th>
										<th>Páginas</th>
										<th>Editorial</th>
										<th>Lugar de publicación</th>
										<th>Categoría</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->ISBN }}</td>
											<td>{{ $libro->Titulo }}</td>
											<td>{{ $libro->Autor }}</td>
											<td>{{ $libro->AnoPublicacion }}</td>
											<td>{{ $libro->Paginas }}</td>
											<td>{{ $libro->Editorial }}</td>
											<td>{{ $libro->LugarPublicacion }}</td>
											<td>
                                                {{ $libro->categoria->nombreCategoria }}
                                            </td>

                                            <td>
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
@endsection
