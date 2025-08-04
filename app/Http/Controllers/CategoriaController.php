<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'image' => 'required',
            'nombre_en' => 'required',
            'image_en' => 'required',
        ]);
        
        $image = null;
        $image2 = null;

        if($request->hasFile('image'))
        $image = $request->file('image')->store('categoria_covers', 'public') ?? null;
        
        if($request->hasFile('image_en'))
        $image2 = $request->file('image_en')->store('categoria_covers', 'public') ?? null;

        $categoria = new Categoria([
            'nombre' => $request->input('nombre'),
            'nombre_en' => $request->input('nombre_en'),

            'slug' => Str::slug($request['nombre']),
            'image' => $image ?? null,
            'image_en' => $image2 ?? null,
            
        ]);

        $categoria->save();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creadas exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::find($id);

        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $categoria = Categoria::find($id);

        $request->validate([
            'nombre' => 'required',
            'image' => 'nullable',
            'nombre_en' => 'required',
            'image_en' => 'nullable'
        ]);
        if($request->hasFile('image'))
            $image = $request->file('image')->store('categoria_covers', 'public') ?? null;
            
        if($request->hasFile('image_en'))
            $image2 = $request->file('image_en')->store('categoria_covers', 'public') ?? null;

        $categoria->update([
            'nombre' => $request->input('nombre'),
            'nombre_en' => $request->input('nombre'),
            'slug' => Str::slug($request['nombre']),
            'image' => $image,
            'image_en' => $image2

        ]);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect()->route('categorias.index')->with(['success' => 'Categoria eliminada con éxito']);
    }

}
