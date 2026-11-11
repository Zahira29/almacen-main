<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
USE App\Http\Resources\ProductoResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(5);
        //return ProductoResource::collection($productos)
        // ->response()->setStatusCode(200);
        return view('productos.index', compact('productos'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
        return (new ProductoResource($producto))->response()->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
