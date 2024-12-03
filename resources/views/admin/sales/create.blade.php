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

    <form action="{{route('sales.store')}}" method="POST">
        @csrf
        <label for="">Cliente</label>
        <select name="client_id">
            <option value="">Seleciona...</option>
            @foreach ($clients as $client => $id)
                <option value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>

        <label for="">Producto</label>
        <select name="product_id">
            <option value="">Seleciona...</option>
            @foreach ($products as $product => $id)
                <option value="{{$id}}">{{$product}}</option>
            @endforeach
        </select>

        <label for="">Fecha de venta</label>
        <input type="date" name="sale_date" id="">

        <button type="submit">Registrar</button>
    </form>

@endsection