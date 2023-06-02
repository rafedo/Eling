<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.kategori.index', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'jenis_kategori' => 'required|max:255',
            'deskripsi_singkat' => 'required|max:255',
            'deskripsi_panjang' => 'required',
            'foto' => 'required|image'
        ]);

        $imageName = time().'.'.$request->foto->extension();  

        $request->foto->storeAs('public/category', $imageName);

        $input = [
            'jenis_kategori'    => $request->jenis_kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'foto'              => $imageName
        ];

        Kategori::create($input);

        return redirect('/dashboard/kategori')->with('berhasil', 'menambahkan data materi video baru!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'jenis_kategori' => 'required|max:255',
            'deskripsi_singkat' => 'required|max:255',
            'deskripsi_panjang' => 'required',
            'foto' => 'required|image'

        ];

        $imageName = $request->validate($rules);
        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->storeAs('public/category', $imageName);

        $input = [
            'jenis_kategori'    => $request->jenis_kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'foto'              => $imageName
        ];


        Kategori::where('id', $kategori->id)->update($input);

        return redirect('/dashboard/kategori')->with('berhasil', 'salah satu data telah diupdate! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect('/dashboard/kategori')->with('berhasil', 'salah satu data telah dihapus! ');
    }
}