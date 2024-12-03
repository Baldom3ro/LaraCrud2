<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
}) -> name('index');

Route::get('/products',function(){
    return view('products_index');
}) -> name('products');

Route::get('/clients',function(){
    return view('clients_index');
}) -> name('clients');

Route::get('/sales',function(){
    return view('sales_index');
}) -> name('sales');

Route::get('/brands',function(){
    return view('brands_create');
}) -> name('brands');

/*Route::get('/indexproducts/',[ProductController::class, 'index']) 
-> name('products');

Route::get('/storeproducts/',[ProductController::class, 'store']) 
-> name('pstore');

Route::get('/createproducts/',[ProductController::class, 'create']) 
-> name('pcreate');

Route::get('/editproducts/',[ProductController::class, 'edit']) 
-> name('pedit');

Route::get('/showproducts/',[ProductController::class, 'show']) 
-> name('pshow');

Route::get('/updateproducts/',[ProductController::class, 'update']) 
-> name('pupdate');

Route::get('/destroyproducts/',[ProductController::class, 'destroy']) 
-> name('pdestroy');
*/
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::get('/products/{product}/delete',[ProductController::class, 'delete'])->name('products.delete');

Route::resource('/brands', App\Http\Controllers\BrandController::class);
Route::get('/brands/{brand}/delete',[BrandController::class, 'delete'])->name('brands.delete');

Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::get('/clients/{client}/delete',[ClientController::class, 'delete'])->name('clients.delete');

Route::resource('/sales', App\Http\Controllers\SaleController::class);

Route::get('sales/{sale}/delete', [SaleController::class, 'delete'])->name('sales.delete');


Route::resource('/addresses', App\Http\Controllers\AddressController::class);
Route::get('/addresses/{address}/delete',[AddressController::class,'delete'])->name('addresses.delete');
