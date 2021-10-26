@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')


<div class ="container">
    <table id="idCursos" class="table table-striped table-bordered" style="width:100%">

    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>

        </tr>
    </thead>




<tbody>
@foreach ($cursos as $curso)

<tr>
<td>{{$curso->id}}</td>
<td>{{$curso->name}}</td>
<td>{{$curso->descripcion}}</td>
<td><a href="{{route('cursos.show',$curso)}}">Eliminar</a></td>
<td><a href="{{route('cursos.edit',$curso->id)}}">Editar</a></td>

</tr>
@endforeach

</tbody>

</table>

@endsection

@section('js')


<script type="text/javascript">

   $(document).ready(function() {
    // $('#idPqrsd').DataTable();

    // Enable DataTables: https://datatables.net/examples/basic_init/
    try {
      if ($.fn.dataTable.isDataTable("#idPqrsd")) {
        $("#idCursos").DataTable()
      } else {
        $("#idPqrsd").DataTable({
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json",
          },
        })
      }
    } catch (error) {
      console.log(
        "Unable to add Filters to a table from this page - " + error.name
      )
    }


} );
</script>

@endsection
