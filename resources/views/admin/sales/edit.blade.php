@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Create de address</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('sales.update')}}" method="POST">
        @csrf
        <label for="">Cliente</label>
        <select name="client_id">
            <option value="">Seleciona...</option>
            @foreach ($clients as $client => $id)
            <option {{$sale->client_id == $id? 'selected': ''}} value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>

        <label for="">Producto</label>
        <select name="product_id">
            <option value="">Seleciona...</option>
            @foreach ($products as $product => $id)
            <option {{$sale->product_id == $id? 'selected': ''}} value="{{$id}}">{{$product}}</option>
            @endforeach
        </select>

        <label for="">Fecha de venta</label>
        <input type="date" name="sale_date" value="{{$sale->sale_date}}">

        <button type="submit">Registrar</button>
    </form>

@endsection