@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<table>
    <thead>
        <h3>¿Estas seguro que quieres eliminar 
            la venta {{$sale->id}}?</h3>
    </thead>
    <tbody>
        <tr>
            <td>
                <form action="{{route('sales.index')}}">
                    <button type="submit">No</button>
                </form>
            </td>
            <td>
                <form action="{{route('sales.destroy', $sale->id)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Si</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection