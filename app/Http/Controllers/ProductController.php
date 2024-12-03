<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Brand;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$gallina = Product::get(); 
        $gallina = Product::paginate(3);
        return view('admin/products/index', compact('gallina')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands = Brand::get(); //Obtener todos los datos
        $brands = Brand::pluck('id', 'brand'); //Obtener datos especificos
        //dd($brands); //Verificar que los datos se esten extrayendo
        return view('admin/products/create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Registro Realizado";
        //dd($request);
        //Si el campo imagen tiene información
        $data= $request->all();

        if(isset($data["imagen"])){
            //Cambiar el nombre del archivo a cargar
            $data["imagen"] = $filename = time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }


        Product::create($data);
        return to_route(route: 'products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin/products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::pluck('id', 'brand'); //Obtener datos especificos
        return view('admin/products/edit', compact('product','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data= $request->all();

        //Si el campo imagen tiene informaciónc
        if(isset($data["imagen"])){
            //Cambiar el nombre del archivo a cargar
            $data["imagen"] = $filename = time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }

        $product->update($data);//Actualizamos los datos en la base de datos


        return to_route(route: 'products.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product){
        echo view ('admin/products/delete', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product ->delete();
        return to_route('products.index');
    }

    
}
