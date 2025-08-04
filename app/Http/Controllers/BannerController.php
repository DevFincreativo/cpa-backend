<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::paginate(15);

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banners = Banner::all();

        return view('admin.banner.create', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'img' => 'nullable',
            'img_en' => 'nullable',
        ]);
        
        $img1 = null;
        $img2 = null;

        // Subir la imagen de portada
        if($request->hasFile('img'))
            $img1 = $request->file('img')->store('banner_covers', 'public') ?? null;
            
        // Subir la imagen de portada
        if($request->hasFile('img_en'))
        $img2 = $request->file('img_en')->store('banner_covers', 'public') ?? null;

        
        $banner = Banner::create([
            'img' => $img1 ?? null,
            'img_en' => $img2 ?? null,
        ]);

        return redirect()->route('banner.index')
            ->with('success', 'Banner creado exitosamente.');
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
        $banner = Banner::find($id);

        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);

        $request->validate([
            'img' => 'nullable',
            'img_en' => 'nullable',
        ]);

        // Si se proporciona una nueva imagen de portada
        if ($request->hasFile('img')) {
            // Subir la nueva imagen de portada
            $img = $request->file('img')->store('banner_covers', 'public') ?? null;

            // Actualizar los datos con la nueva imagen
            $banner->img = $img;
        }
        
        if ($request->hasFile('img_en')) {
            // Subir la nueva imagen de portada
            $img2 = $request->file('img_en')->store('banner_covers', 'public') ?? null;

            // Actualizar los datos con la nueva imagen
            $banner->img_en = $img2;
        }


        $banner->save();

        return redirect()->route('banner.index')
            ->with('success', 'Banner actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);

        $banner->delete();

        return back()->with(['success' => 'Banner eliminado con éxito']);
    }


}
