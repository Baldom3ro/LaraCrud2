@extends('layout.main_template')

@section('content')
<h2 class="text-center mb-4">Índice de Ventas</h2>

<div class="d-flex justify-content-around mb-4">
    <a href="{{ route('sales.create') }}" class="btn btn-success">
        <i class="fa-solid fa-plus"></i> Agregar Venta
    </a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        <i class="fa-solid fa-box"></i> Productos
    </a>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">
        <i class="fa-solid fa-users"></i> Clientes
    </a>
</div>


<table class="table table-dark table-striped">
    <thead>
        <th>ID</th>
        <th>Cliente</th>
        <th>Producto</th>
        <th>Fecha de venta</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->id }}</td>
            <td>{{ $sale->client->name ?? 'No asignado' }}</td>
            <td>{{ $sale->product->nameProduct ?? 'No asignado' }}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>
                <a href="{{ route('sales.show', ['sale' => $sale->id]) }}" class="btn btn-outline-success">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="{{ route('sales.edit', ['sale' => $sale->id]) }}" class="btn btn-outline-info">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="{{ route('sales.delete', ['sale' => $sale->id]) }}" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
<!-- Paginación -->
<div class="d-flex justify-content-center mt-4">
    {{ $sales->links('pagination::bootstrap-4') }}
</div>

@endsection
