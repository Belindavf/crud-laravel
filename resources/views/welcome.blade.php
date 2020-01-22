@extends('layouts.main')
@section('content')
<h1>Página HOME</h1>

@if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
@endif

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">E-mail</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($estudiantes as $estudiante)
    <tr>
      <th scope="row">{{$estudiante->id}}</th>
      <td>{{$estudiante->nombre}}</td>
      <td>{{$estudiante->apellidos}}</td>
      <td>{{$estudiante->email}}</td>
      <td>{{$estudiante->telefono}}</td>
      <td>
        <a class="btn btn-raised btn-primary btn-sm" href="{{route('edit',$estudiante->id)}}"> <i class="fas fa-edit"></i></a>
        <!--<a class="btn btn-raised btn-danger btn-sm" href="{{route('delete',$estudiante->id)}}"> <i class="fas fa-trash-alt"></i></a>-->
        <form id="delete_form_{{$estudiante->id}}" action="{{route('delete',$estudiante->id)}}" method="POST" style="display: none;" >
            {{csrf_field()}}
            {{method_field('delete')}}
        </form>
        <button onclick="if (confirm('¿Está seguro de que desea borrar a este alumno?')) {
            document.getElementById('delete_form_{{$estudiante->id}}').submit();
            //hay que poner {{$estudiante->id}} en el form para que borre el alumno en el que se le dio al botón de eliminar, sino borraría el primer alumno de la tabla
        } else{
            event.preventDefault(); //Este método cancela el evento si éste es cancelable, sin detener el resto del funcionamiento del evento, es decir, puede ser llamado de nuevo.
        }
        "
        class="btn btn-raised btn-danger btn-sm" > <i class="fas fa-trash-alt"></i>
        </button>
      </td>
    </tr> 
  @endforeach
  </tbody>
</table>
{{$estudiantes->links()}}

@endsection