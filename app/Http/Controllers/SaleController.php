<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sale;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::with(['client', 'product'])->paginate(4);
        return view('admin.sales.index', compact('sales')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::pluck('id', 'name');
        $products = Product::pluck('id', 'nameProduct');
        return view('admin/sales/create', compact('clients', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'sale_date' => 'required|date',
        ]);

        Sale::create($validated);
        return to_route('sales.index')->with('status', 'Venta creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('admin/sales/show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        $client = Client::pluck('id', 'name');
        $product = Product::pluck('id', 'nameProduct');
        return view('admin/sales/edit', compact('clients', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'sale_date' => 'required|date',
        ]);

        $sale->update($validated);

        return to_route('sales.index')->with('status', 'Venta actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Sale $sale){
        echo view('admin/sales/delete', compact('sale'));
    }

    public function destroy(Sale $sale)
    {
        $sale ->delete();
        return to_route('sales.index');
    }
}
