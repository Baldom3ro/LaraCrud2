@extends('layout.main_template')

@section('content')

<h1>Detalles del producto</h1>
<h3>Producto: {{$product->nameProduct}}</h3>
<h3>Cantidad: {{$product->stock}}</h3>
<h3>Precio: {{$product->unit_price}}</h3>
<h3>Imagen: {{$product->imagen}}</h3>
<!-- TODO show image -->
@endsection