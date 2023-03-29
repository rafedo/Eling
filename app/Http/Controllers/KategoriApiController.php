<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json([
            'data' => $kategori
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
        $kategori = Kategori::create([
            'jenis_kategori' => $request->jenis_kategori
        ]);
        return response()->json([
            'data' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return response()->json([
            'data' => $kategori
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
    public function update(Request $request, Kategori $kategori)
    {
        $kategori -> jenis_kategori = $request->jenis_kategori;
        $kategori -> save();

        return response()->json([
            'data' => $kategori
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return response()->json([
            'message' => 'Kategori delete'
        ], 204);
    }
}
