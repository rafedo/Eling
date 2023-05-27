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
        $materi = Materi::with('kategori')->get();
        return response()->json([
            'data' => $materi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materi = Materi::create([
            'nama' => $request->nama,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'foto' => $request->foto,
            'link_video' => $request->link_video,
            'sumber' => $request->sumber,
            'id_kategori' => $request->id_kategori
        ]);

        $materi->load('kategori');

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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        $materi -> nama = $request->nama;
        $materi -> deskripsi_panjang = $request->deskripsi_panjang;
        $materi -> foto = $request->foto;
        $materi -> link_video = $request->link_video;
        $materi -> sumber = $request->sumber;
        $materi -> id_kategori = $request->id_kategori;
        $materi -> save();

        $materi->load('kategori');
        
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
