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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create([
            'nama' => $request->nama,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'sumber' => $request->sumber,
            'foto' => $request->foto,
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
    public function show($artikel)
    {
        $artikel = Artikel::with('kategori')->get();
        return response()->json([
            'data' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel -> nama = $request->nama;
        $artikel -> deskripsi_singkat = $request->deskripsi_singkat;
        $artikel -> deskripsi_panjang = $request->deskripsi_panjang;
        $artikel -> tanggal = $request->tanggal;
        $artikel -> link = $request->link;
        $artikel -> sumber = $request->sumber;
        $artikel -> foto = $request->foto;
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
