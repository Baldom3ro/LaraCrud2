@extends('layout.main_template')

@section('content')
    <h1>Direcciones</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('addresses.create')}}">Crear dirrección</a></button>
    <br>
    <br>

<table class="table table-dark table-striped">
    <thead>
        <th>Nombre del cliente</th>
        <th>Calle</th>
        <th>Numero interno</th>
        <th>Numero externo</th>
        <th>Vecindario</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Codigo postal</th>
        <th>Referencias</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($address as $a)
            <tr>
                <td>{{$a->client->name}}</td>
                <td>{{$a->street}}</td>
                <td>{{$a->internal_num}}</td>
                <td>{{$a->external_num}}</td>
                <td>{{$a->neighborthood}}</td>
                <td>{{$a->town}}</td>
                <td>{{$a->state}}</td>
                <td>{{$a->country}}</td>
                <td>{{$a->postal_code}}</td>
                <td>{{$a->references}}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("addresses.show",$a)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("addresses.edit",$a)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("addresses.delete",$a)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$address->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection
