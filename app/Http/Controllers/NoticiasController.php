<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticias::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'title_en' => 'required',
            'content_en' => 'required',
            'image_en' => 'required',
        ]);

        // Subir la imagen de portada
        $coverPath = $request->file('image')->store('noticias_covers', 'public');
        $coverPathEn = $request->file('image_en')->store('noticias_covers', 'public');

        $noticia = new Noticias([
            'title' => $request->input('title'),
            'slug' => Str::slug($request['title']),
            'content' => $request->input('content'),
            'image' => $coverPath,
            'title_en' => $request->input('title_en'),
            'content_en' => $request->input('content_en'),
            'image_en' => $coverPathEn,
        ]);

        $noticia->save();

        return redirect()->route('noticias.index')
            ->with('success', 'Noticias creadas exitosamente.');
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
        $noticia = Noticias::find($id);

        return view('admin.noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $noticia = Noticias::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'title_en' => 'required',
            'content_en' => 'required',
            'image_en' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            // Subir la nueva imagen de portada
            $coverPath = $request->file('image')->store('noticias_covers', 'public');
            
            $coverPathEn = $request->file('image_en')->store('noticias_covers', 'public');

            // Actualizar los datos con la nueva imagen
            $noticia->update([
                'title' => $request->input('title'),
                'slug' => Str::slug($request['title']),
                'content' => $request->input('content'),
                'image' => $coverPath,
                'title_en' => $request->input('title_en'),
                'content_en' => $request->input('content_en'),
                'image_en' => $coverPathEn,
            ]);
        } else {
            // Mantener la imagen anterior y actualizar los otros datos
            $noticia->update([
                'title' => $request->input('title'),
                'slug' => Str::slug($request['title']),
                'content' => $request->input('content'),
                'title_en' => $request->input('title_en'),
                'content_en' => $request->input('content_en'),
            ]);
        }

        return redirect()->route('noticias.index')
            ->with('success', 'Noticia actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $noticia = Noticias::find($id);

        $noticia->delete();

        return redirect()->route('noticias.index')->with(['success' => 'Noticia eliminada con éxito']);
    }
}
