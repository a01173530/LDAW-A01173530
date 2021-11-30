<!-- Formulario para editar un libros  -->
@extends('layouts.app')
@section('content')
<div class="container">

<h1>Editar Usuario</h1>

<form action="{{ url('/usuarios/'.$usuario->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuario.form')
</form>
</div >
@endsection