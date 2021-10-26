@extends('layouts.plantilla')

@section('content')

<h1> ¿Eliminar curso?  {{$curso}}</h1>

<form action="{{route("cursos.destroy",$curso)}}" method="POST">

@csrf
@method('delete')
<button type="submit">Eliminar</button>

</form>


@endsection
