@extends('layout.main_template')

@section('content')

<h1>Detalles del cliente</h1>
<h3>Nombre: {{$client->name}}</h3>
<h3>Apellido paterno: {{$client->last_name}}</h3>
<h3>Apellido materno: {{$client->second_last_name}}</h3>
<h3>Email: {{$client->email}}</h3>
<h3>Telefono: {{$client->phone}}</h3>
<h3>Estado: {{$client->state}}</h3>
<h3>Ciudad: {{$client->town}}</h3>
<!-- TODO show image -->
@endsection