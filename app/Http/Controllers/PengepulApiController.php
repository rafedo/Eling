<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

class PengepulApiController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengepul = Pengepul::all();
        return response()->json([
            'data' => $pengepul
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengepul = Pengepul::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'alamat' => $request->alamat,
            'ketersediaan_hari' => $request->ketersediaan_hari,
            'ketersediaan_jam' => $request->ketersediaan_jam,
            'kontak' => $request->kontak,
            'maps' => $request->maps,
            'id_galeri' => $request->id_galeri
        ]);
        return response()->json([
            'data' => $pengepul
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengepul $pengepul)
    {
        return response()->json([
            'data' => $pengepul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengepul $pengepul)
    {
        $pengepul -> nama = $request->nama;
        $pengepul -> kategori = $request->kategori;
        $pengepul -> alamat = $request->alamat;
        $pengepul -> ketersediaan_hari = $request->ketersediaan_hari;
        $pengepul -> ketersediaan_jam = $request->ketersediaan_jam;
        $pengepul -> kontak = $request->kontak;
        $pengepul -> maps = $request->maps;
        $pengepul -> id_galeri = $request->id_galeri;
        $pengepul -> save();

        return response()->json([
            'data' => $pengepul
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengepul $pengepul)
    {
        $pengepul->delete();
        return response()->json([
            'message' => 'Pengepul delete'
        ], 204);
    }
}
