<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::paginate(4);
        return view('admin/addresses/index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::pluck('id', 'name');
        return view('admin/addresses/create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();
        Address::create($data);
        return to_route(route: 'addresses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('admin/addresses/show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        $clients = Client::pluck('id', 'name');
        return view('admin/addresses/edit', compact('address', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $data= $request->all();
        $address->update($data);
        return to_route(route: 'addresses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Address $address){
        echo view ('admin/addresses/delete', compact('address'));
    }

    public function destroy(Address $address)
    {
        $address ->delete();
        return to_route('addresses.index');
    }
}
