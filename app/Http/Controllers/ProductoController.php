<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'nullable',
            'descripcion' => 'required',
            'cuerpo' => 'nullable',
            'categoria_id' => 'nullable',
            'activo' => 'nullable',
            'orden' => 'nullable',
            'files.*' => 'nullable',
        ]);

        // Subir la imagen de portada
        //$coverPath = $request->file('image')->store('productos_covers', 'public');

        $producto = new Producto([
            'nombre' => $request->input('nombre'),
            'slug' => Str::slug($request['nombre']),
            'descripcion' => $request->input('descripcion'),
            'cuerpo' => $request->input('cuerpo'),
            'categoria_id' => $request->input('categoria_id'),
            //'image' => $coverPath,
            'activo' => $request->input('activo') ?? 0,
            'orden' => $request->input('orden'),
        ]);

        $producto->save();
        /*
        if ($request->hasFile('image')) {

            $producto->addMediaFromRequest('image')->toMediaCollection('portada_productos');
        }
        */

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                    $producto->addMedia($file)->toMediaCollection('imagenes_productos');
            }
        }

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
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
        $producto = Producto::with(['media'])->find($id);

        $categorias = Categoria::all();

        foreach ($producto->media ?? [] as $file)
        {
            if($file->order_column == 1) {
                $file->collection_name = 'portada_productos';
            }
            else {
                $file->collection_name = 'imagenes_productos';
            }

            $file->save();
        }


        return view('admin.productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $producto = Producto::find($id);

        $request->validate([
            'nombre' => 'required',
            'slug' => 'nullable',
            'descripcion' => 'required',
            'cuerpo' => 'nullable',
            'orden' => 'nullable',
            //'image' => 'nullable',
            'categoria_id' => 'nullable',
            'activo' => 'nullable',
            'files.*' => 'nullable',
        ]);

        $producto->update([
            'nombre' => $request->input('nombre'),
            'slug' => Str::slug($request['nombre']),
            'descripcion' => $request->input('descripcion'),
            'cuerpo' => $request->input('cuerpo'),
            'categoria_id' => $request->input('categoria_id'),
            'orden' => $request->input('orden'),
            'activo' => $request->input('activo') ?? 0
        ]);


        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                    $producto->addMedia($file)->toMediaCollection('imagenes_productos');
            }
        }
        /*
        if ($request->hasFile('image')) {

            if ($producto->getFirstMedia('portada_productos')) {
                $producto->clearMediaCollection('portada_productos');
            }
            $producto->addMediaFromRequest('image')->toMediaCollection('portada_productos');
        }
        */

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);

        $producto->delete();

        return redirect()->route('productos.index')->with(['success' => 'Producto eliminado con éxito']);
    }

    public function seeder()
    {
        abort(404);
        $productos = Producto::all();
        $count = 0;

        foreach($productos as $producto)
        {
            if(!is_null($producto->image)){

                $url = env('APP_URL') . '/storage/' . $producto->image;


                $producto->addMediaFromUrl($url)->toMediaCollection('portada_productos');

                $count += 1;

            }
        }

        dd($count);
    }

    public function portada(Request $request)
    {
        $productoId = $request['producto'];
        $mediaId = $request['media'];

        $producto = Producto::with(['media'])->find($productoId);

        foreach ($producto->media ?? [] as $file)
        {
            if($file->id == $mediaId) {
                $file->order_column = 1;
                $file->collection_name = 'portada_productos';
            }
            else {
                $file->order_column = 2;
                $file->collection_name = 'imagenes_productos';
            }


            $file->save();
        }


        return back()->with(['success' => 'Portada actualizada']);
    }



}
