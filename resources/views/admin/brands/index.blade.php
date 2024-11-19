@extends('layout.main_template')

@section('content')

    <h1>Marcas</h1>
    <br>
    <button><a href="{{route('brands.create')}}">Registrar marca</a></button>
    <br>

<table>
    <thead>
        <th>Nombre de la Marca</th>
        <th>Marca Id</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </thead>
    <tbody>
        @foreach ($brand as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->brand}}</td>
                <td>{{$b->description}}</td>
                <td>
                    <button><a href="{{route("brands.show",$b)}}">Mostrar</a></button>
                    <button><a href="{{route("brands.edit",$b)}}">Editar</a></button>
                    <form action="{{route('brands.destroy',$b)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
