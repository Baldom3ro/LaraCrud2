@extends('layout.main_template')

@section('content')
    <h1>Clientes</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('clients.create')}}">Crear Cliente</a></button>
    <br>
    <br>
<table class="table table-dark table-striped">
    <thead>
        <th>Nombre del cliente</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($client as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->second_last_name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->state}}</td>
                <td>{{$c->town}}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("clients.show",$c)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("clients.edit",$c)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("clients.delete",$c)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$client->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection
