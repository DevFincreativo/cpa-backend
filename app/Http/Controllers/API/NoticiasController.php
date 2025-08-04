<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticias;


class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticias::orderBy('created_at', 'desc')->paginate(15);
        return response()->json($noticias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
        $noticia = Noticias::create($request->all());
        return response()->json($noticia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = Noticias::findOrFail($id);

        return response()->json($noticia);
    }

    public function showSlug(string $slug)
    {

        $noticia = Noticias::where('slug', $slug)->first();

        return response()->json($noticia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort(404);
        $noticia = Noticias::findOrFail($id);
        $noticia->update($request->all());
        return response()->json($noticia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(404);
        $noticia = Noticias::findOrFail($id);
        $noticia->delete();
        return response()->json(null, 204);
    }
}
