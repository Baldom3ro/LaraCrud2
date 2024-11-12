@extends('layout.main_template')

@section('content')
    <h1>Productos</h1>
    <br>
    <button><a href="{{route('products.create')}}">Crear producto</a></button>
    <br>

<table>
    <thead>
        <th>Nombre del producto</th>
        <th>Marca Id</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($gallina as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->brand_id}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td>{{$p->imagen}}</td>
                <td>
                    <button><a href="{{route("products.show",$p)}}">Mostrar</a></button>
                    <button><a href="">Editar</a></button>
                    <button><a href="">Eliminar</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
