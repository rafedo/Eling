<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'artikels' => Artikel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'id_kategori' => 'required|max:255',
            'link' => 'required|max:255',
            'foto' => 'required|max:255'
        ]);

        Artikel::create($validatedData);

        return redirect('/dashboard/artikel')->with('berhasil', 'menambahkan data artikel baru!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('dashboard.artikel.edit', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'nama' => 'required|max:255',
            'id_kategori' => 'required|max:255',
            'link' => 'required|max:255',
            'foto' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Artikel::where('id', $artikel->id)->update($validatedData);

        return redirect('/dashboard/artikel')->with('berhasil', 'salah satu data telah diupdate! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);

        return redirect('/dashboard/artikel')->with('berhasil', 'salah satu data telah dihapus! ');
    }
}
