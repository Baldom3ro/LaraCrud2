@extends('layout.main_template')

@section('content')
    <h1>Productos</h1>
    <br>
    <button><a href="{{route('products.create')}}">Crear producto</a></button>
    <br>
@endsection