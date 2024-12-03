@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Editar Cliente</h1>

    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$client->name}}">

        <label for="">Apellido paterno</label>
        <input type="text" name="last_name" value="{{$client->last_name}}">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" value="{{$client->second_last_name}}">

        <label for="">Email</label>
        <input type="email" name="email" value="{{$client->email}}">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" value="{{$client->phone}}">

        <label for="">Estado</label>
        <input type="text" name="state" value="{{$client->state}}">

        <label for="">Ciudad</label>
        <input type="text" name="town" value="{{$client->town}}">

        <button type="submit">Registrar</button>
    </form>

@endsection