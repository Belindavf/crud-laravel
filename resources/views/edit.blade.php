@extends('layouts.main')
@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
        {{$error}}
        </div>
    @endforeach
@endif

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{route('update',$estudiante->id) }}" method="POST">

{{ csrf_field() }}
    <p class="h4 mb-4">Alumno</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name= "nombre" placeholder="Nombre" value="{{$estudiante->nombre}}">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name= "apellidos" placeholder="Apellidos" value="{{$estudiante->apellidos}}">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail" value="{{$estudiante->email}}">


    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="telefono" placeholder="Telefono" value="{{$estudiante->telefono}}">


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Modificar</button>    

</form>
<!-- Default form register -->


@endsection 