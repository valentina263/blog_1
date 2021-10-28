@extends('layouts.plantilla')

@section('content')

<h1 class="text-center"> ¿Eliminar curso?  {{$curso}}</h1>

<form action="{{route("cursos.destroy",$curso)}}" class="text-center border p-3  method="POST">

@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>

</form>


@endsection
