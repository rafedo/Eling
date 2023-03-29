<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();
        return response()->json([
            'data' => $materi
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
        $materi = Materi::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'id_kategori' => $request->id_kategori
        ]);
        return response()->json([
            'data' => $materi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        return response()->json([
            'data' => $materi
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
    public function update(Request $request, Materi $materi)
    {
        $materi -> nama = $request->nama;
        $materi -> link = $request->link;
        $materi -> id_kategori = $request->id_kategori;
        $materi -> save();

        return response()->json([
            'data' => $materi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return response()->json([
            'message' => 'Materi delete'
        ], 204);
    }
}
