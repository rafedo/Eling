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
            'tlp' => $request->tlp,
            'alamat' => $request->alamat
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
        $pengepul -> tlp = $request->tlp;
        $pengepul -> alamat = $request->alamat;
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
