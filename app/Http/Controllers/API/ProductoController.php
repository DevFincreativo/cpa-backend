<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(['categoria', 'search', 'per_page']);

        $query = Producto::with(['media']);

        $per_page = $filters['per_page'] ?? 15;

        $query->where('activo', 1);

        if(isset($filters['categoria']))
            $query->where('categoria_id', $filters['categoria'])->get();


        if (isset($filters['search']))
            $query->where('name', 'like', '%' . $filters['search'] . '%');

        $products = $query->paginate($per_page);

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::with(['media'])->findOrFail($id);

        return response()->json($producto);
    }

    public function showSlug(string $slug)
    {

        $producto = Producto::where('slug', $slug)->first();

        return response()->json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort(404);
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(404);
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return response()->json(null, 204);
    }

}
