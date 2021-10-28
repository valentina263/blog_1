@extends('layouts.plantilla')

@section('content')

<h1 class="text-center">Editar curso</h1>
<form action="{{route('cursos.update', $curso)}}" class="text-center "method="POST">

    @csrf

    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{$curso->name}}">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion" value="{{$curso->descripcion}}">
    </label>

    <br><br>
    <button type="submit" class="btn btn-info">Editar:</button>
    </form>

@endsection
