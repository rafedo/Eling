<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class DashboardGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeris' => Galeri::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required'
        ]);

        Galeri::create($validatedData);

        return redirect('/dashboard/galeri')->with('berhasil', 'menambahkan data materi video baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit', [
            'galeri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $rules = [
            'foto' => 'required'

        ];

        $validatedData = $request->validate($rules);

        Galeri::where('id', $galeri->id)->update($validatedData);

        return redirect('/dashboard/galeri')->with('berhasil', 'salah satu data telah diupdate! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);

        return redirect('/dashboard/galeri')->with('berhasil', 'salah satu data telah dihapus! ');
    }
}
