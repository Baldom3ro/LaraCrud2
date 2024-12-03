@extends('layout.main_template')

@section('content')
    <h1>Productos</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('products.create')}}">Crear producto</a></button>
    <button class="btn btn-outline-primary"><a href="{{route('brands.create')}}">Registrar marca</a>
    <button class="btn btn-outline-primary"><a href="{{ route('brands.index') }}">Mostrar Marcas</a></button>
    <br>
    <br>

<table class="table table-dark table-striped">
    <thead>
        <th>Nombre del producto</th>
        <th>Marca</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($gallina as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->brand->brand}}</td>
                <td>{{$p->brand->description}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td><img src="/image/products/{{$p->imagen}}" width="60" alt="producto"></td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("products.show",$p)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("products.edit",$p)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("products.delete",$p)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$gallina->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection
