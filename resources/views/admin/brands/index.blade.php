@extends('layout.main_template')

@section('content')

    <h1>Marcas</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('brands.create')}}">Registrar marca</a></button>
    <br>
    <br>

<table class="table table-dark table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($brand as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->brand}}</td>
                <td>{{$b->description}}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("brands.show",$b)}}"><i class="fa-solid fa-plus"></i></a></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("brands.edit",$b)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("brands.delete",$b)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
