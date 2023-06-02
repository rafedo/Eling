<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

class DashboardPengepulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengepul.index', [
            'pengepuls' => Pengepul::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengepul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori'          => 'required|max:255',
            'nama'              => 'required|max:255',
            'alamat'            => 'required|max:255',
            'ketersediaan_hari' => 'required|max:255',
            'ketersediaan_jam'  => 'required|max:255',
            'kontak'            => 'required|max:255',
            'maps'              => 'required|max:255',
        ]);

        Pengepul::create($validatedData);

        return redirect('/dashboard/pengepul')->with('berhasil', 'menambahkan data pengepul baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengepul $Pengepul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengepul $pengepul)
    {
        return view('dashboard.pengepul.edit', [
            'pengepul' => $pengepul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengepul $pengepul)
    {
        $rules = [
            'kategori' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'ketersediaan_hari' => 'required|max:255',
            'ketersediaan_jam' => 'required|max:255',
            'kontak' => 'required|max:255',
            // 'id_galeri' => 'required|max:255',
            'maps' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        Pengepul::where('id', $pengepul->id)->update($validatedData);

        return redirect('/dashboard/pengepul')->with('berhasil', 'salah satu data telah diupdate! ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengepul $pengepul)
    {
        Pengepul::destroy($pengepul->id);

        return redirect('/dashboard/pengepul')->with('berhasil', 'salah satu data telah dihapus! ');

    }
}