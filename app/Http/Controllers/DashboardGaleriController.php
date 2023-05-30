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

    public function pengepul($id) {
        $galleries = Galeri::where('pengepul_id', $id)->get();

        return view('dashboard.galeri.show', compact(['galleries', 'id']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('dashboard.galeri.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required|image'
        ]);

        $imageName = time().'.'.$request->foto->extension();  

        $request->foto->storeAs('public/images', $imageName);

        $input = [
            'pengepul_id' => $id,
            'foto' => $imageName,
        ];

        // dd($input);

        Galeri::create($input);

        return redirect('/dashboard/gallery/pengepul/'. $id)->with('berhasil', 'menambahkan data materi video baru!');
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

        return redirect('/dashboard/gallery/pengepul/'. $galeri->pengepul_id)->with('berhasil', 'salah satu data telah diupdate! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        $id = $galeri->pengepul_id;
        Galeri::destroy($galeri->id);

        return redirect('/dashboard/gallery/pengepul/'. $id)->with('berhasil', 'salah satu data telah dihapus! ');
    }
}
