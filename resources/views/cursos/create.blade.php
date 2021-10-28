@extends('layouts.plantilla')

@section('content')

<h1 class="text-center">Crear curso</h1>
<form  action="{{route('cursos.store')}}"class="text-center border m-3"  method="POST">

    @csrf
    <label  >
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br><br>
    <button type="submit"class="btn btn-primary">Enviargit</button>


</form>

@endsection
