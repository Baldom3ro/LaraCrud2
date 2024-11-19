@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Create de Brands</h1>

    <form action="{{route('brands.store')}}" method="POST">
        @csrf
        <label for="">Nombre de la marca</label>
        <input type="text" name="brand" id="">

        <label for="">Descripción</label>
        <input type="text" name="description" id="">


        <button type="submit">Registrar</button>
    </form>

@endsection