<!-- Mostar lista de libros Consulta-->
@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('/usuarios/create') }}"  class="btn btn-primary">Nuevo Usuario</a>

<br>
<br>
<div class="table-responsive">
<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre del usuario</th>
      <th scope="col">Correo del usuario</th>
      <th scope="col">Rol</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $usuarios as  $usuario)
    <tr>
      <td>{{$usuario->id}}</td>
      <td>{{$usuario->name}}</td>
      <td>{{$usuario->email}}</td>
      <td>{{$usuario->rol}}</td>
      <td>
        <a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}" class="btn btn-success">Editar</a>
      </td>
      <td>
        <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
        <!--<a href="{{ url('/administrador/'.$usuario->id_user) }}">Eliminar</a>-->
        @csrf 
          {{method_field('DELETE')}}
          <input type="submit" value="Borrar"  class="btn btn-danger">
        </form>
      </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
</div >
</div >
@endsection