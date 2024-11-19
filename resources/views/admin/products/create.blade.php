@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Create de Productos</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="">Nombre del Producto</label>
        <input type="text" name="nameProduct" id="">
        
        <label for="">Marca</label>
        <select name="brand_id">
            <option value="">Seleciona...</option>
            @foreach ($brands as $brand => $id)
                <option value="{{$id}}">{{$brand}}</option>
            @endforeach
        </select>

        <label for="">Cantidad</label>
        <input type="number" name="stock" id="">

        <label for="">Precio unitario</label>
        <input type="text" name="unit_price" id="">
        
        <label for="">Imagen del Producto</label>
        <input type="file" name="imagen" id="">


        <button type="submit">Registrar</button>
    </form>

@endsection