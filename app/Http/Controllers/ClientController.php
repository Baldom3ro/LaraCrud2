<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::paginate(3);
        return view('admin/clients/index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Client::create($data);
        return to_route(route: 'clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('admin/clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view ('admin/clients/edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data= $request->all();
        $client->update($data);
        return to_route(route: 'clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Client $client){
        echo view('admin/clients/delete', compact('client'));
    }
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clients.index');
    }
}
