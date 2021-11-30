<!-- Formulario para crear un usuario -->
@extends('layouts.app')
@section('content')
<div class="container">
<h1>Añadir Usuarios</h1>

<form action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('usuario.form')
</form>
</div >
@endsection