<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'artikel' => Artikel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('dashboard.artikel.create', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi_singkat' => 'required|max:255',
            'deskripsi_panjang' => 'required',
            'tanggal' => 'required|max:255',
            'link' => 'required|max:255',
            'sumber' => 'required|max:255',
            'foto' => 'required|image',
            'id_kategori' => 'required|max:255'
        ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->storeAs('public/artikel', $imageName);

        $input = [
            'nama' => $request->nama,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'sumber' => $request->sumber,
            'foto' => $imageName,
            'id_kategori' => $request->id_kategori
        ];

        Artikel::create($input);

        return redirect('/dashboard/artikel')->with('berhasil', 'menambahkan data artikel baru!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        $kategori = Kategori::all(); 
        return view('dashboard.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'nama' => 'required|max:255',
            'deskripsi_singkat' => 'required|max:255',
            'deskripsi_panjang' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'link' => 'required|max:255',
            'sumber' => 'required|max:255',
            'foto' => 'required|image',
            'id_kategori' => 'required|max:255',
        ];

        $imageName = $request->validate($rules);
        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->storeAs('public/artikel', $imageName);

        $input = [
            'nama'    => $request->nama,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'tanggal'    => $request->tanggal,
            'link'    => $request->link,
            'sumber'    => $request->sumber,
            'foto'              => $imageName,
            'id_kategori'    => $request->id_kategori,
        ];

        Artikel::where('id', $artikel->id)->update($input);

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
