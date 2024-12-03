@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1>Editar de dirección</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('addresses.update', $address->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Cliente</label>
        <select name="client_id">
            <option value="">Seleciona...</option>

            @foreach ($clients as $client => $id)
                <option {{$address->client_id == $id? 'selected': ''}} value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>

        <label for="">Calle</label>
        <input type="text" name="street" value="{{$address->street}}">

        <label for="">numero interior</label>
        <input type="number" name="internal_num" value="{{$address->internal_num}}">

        <label for="">Numero exterior</label>
        <input type="number" name="external_num" value="{{$address->external_num}}">

        <label for="">Vecindario</label>
        <input type="text" name="neighborthood" value="{{$address->neighborthood}}">
        
        <label for="">Ciudad</label>
        <input type="text" name="town" value="{{$address->town}}">
        
        <label for="">Estado</label>
        <input type="text" name="state" value="{{$address->state}}">
        
        <label for="">Pais</label>
        <input type="text" name="country" value="{{$address->country}}">
                
        <label for="">Codigo Postal</label>
        <input type="text" name="postal_code" value="{{$address->postal_code}}">
                
        <label for="">Referencias</label>
        <input type="text" name="references" value="{{$address->references}}">

        <button type="submit">Registrar</button>
    </form>

@endsection