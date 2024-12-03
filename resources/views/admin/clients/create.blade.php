@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Create de Clientes</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre del cliente</label>
        <input type="text" name="name" id="">
        
        <label for="">Apellido paterno</label>
        <input type="text" name="last_name">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" id="">

        <label for="">Email</label>
        <input type="email" name="email" id="">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" id="">

        <label for="">Estado</label>
        <input type="text" name="state" id="">

        <label for="">Ciudad</label>
        <input type="text" name="town" id="">


        <button type="submit">Registrar</button>
    </form>

@endsection