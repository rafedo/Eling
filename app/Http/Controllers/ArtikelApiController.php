<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::with('kategori')->get();
        return response()->json([
            'data' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'id_kategori' => $request->id_kategori
        ]);

        $artikel->load('kategori');

        return response()->json([
            'data' => $artikel
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return response()->json([
            'data' => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel -> nama = $request->nama;
        $artikel -> link = $request->link;
        $artikel -> id_kategori = $request->id_kategori;
        $artikel -> save();

        $artikel->load('kategori');
        
        return response()->json([
            'data' => $artikel
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return response()->json([
            'message' => 'Artikel delete'
        ], 204);
    }
}
