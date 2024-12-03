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

    <form action="{{route('addresses.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Cliente</label>
        <select name="client_id">
            <option value="">Seleciona...</option>
            @foreach ($clients as $client => $id)
                <option value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>

        <label for="">Calle</label>
        <input type="text" name="street" id="">

        <label for="">numero interior</label>
        <input type="number" name="internal_num" id="">

        <label for="">Numero exterior</label>
        <input type="number" name="external_num" id="">

        <label for="">Vecindario</label>
        <input type="text" name="neighborthood" id="">
        
        <label for="">Ciudad</label>
        <input type="text" name="town" id="">
        
        <label for="">Estado</label>
        <input type="text" name="state" id="">
        
        <label for="">Pais</label>
        <input type="text" name="country" id="">
                
        <label for="">Codigo Postal</label>
        <input type="text" name="postal_code" id="">
                
        <label for="">Referencias</label>
        <input type="text" name="references" id="">

        <button type="submit">Registrar</button>
    </form>

@endsection