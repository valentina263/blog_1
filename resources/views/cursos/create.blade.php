@extends('layouts.plantilla')

@section('content')

<h1 class="text-center">Crear curso</h1>
<form  action="{{route('cursos.store')}}"class="text-center "  method="POST">

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
    <button type="submit"class="btn btn-primary">Enviar</button>


</form>

@endsection
