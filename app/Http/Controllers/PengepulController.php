<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

class PengepulController extends Controller
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
        $pengepul = Pengepul::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'id_kategori' => $request->id_kategori
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
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengepul $pengepul)
    {
        $pengepul -> nama = $request->nama;
        $pengepul -> link = $request->link;
        $pengepul -> id_kategori = $request->id_kategori;
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
