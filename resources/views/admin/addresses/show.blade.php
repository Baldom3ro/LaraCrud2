@extends('layout.main_template')

@section('content')

<h1>Detalles de la dirección</h1>
<h3>Calle: {{$address->street}}</h3>
<h3>Numero interno: {{$address->internal_num}}</h3>
<h3>Numero externo: {{$address->external_num}}</h3>
<h3>Vecinadrio: {{$address->neighborthood}}</h3>
<h3>Ciudad: {{$address->town}}</h3>
<h3>Estado: {{$address->state}}</h3>
<h3>Pais: {{$address->country}}</h3>
<h3>Codigo postal: {{$address->postal_code}}</h3>
<h3>Referencias: {{$address->references}}</h3>

<!-- TODO show image -->
@endsection