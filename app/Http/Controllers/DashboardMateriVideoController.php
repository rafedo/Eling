<?php

namespace App\Http\Controllers;

use App\Models\DashboardMateriVideo;
use App\Models\Materi;
use App\Models\Kategori;
use Illuminate\Http\Request;


class DashboardMateriVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.materivideo.index', [
            'materivideos' => Materi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.materivideo.create');

        $kategori = Kategori::all();
        return view('dashboard.materivideo.create', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi_panjang' => 'required',
            'id_kategori' => 'required',
            'link_video' => 'required',
            'sumber' => 'required',
            'foto' => 'required|image'
        ]);

        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/materi', $imageName);

        $input = [
            'nama' => $request->nama,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'id_kategori' => $request->id_kategori,
            'link_video' => $request->link_video,
            'sumber' => $request->sumber,
            'foto' => $imageName
        ];

        Materi::create($input);
        return redirect('/dashboard/materivideo')->with('berhasil', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materivideo)
    {
        $kategori = Kategori::all();
        return view('dashboard.materivideo.edit', [
            'materivideo' => $materivideo,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materivideo)
    {
        $rules = [
            'nama' => 'required',
            'deskripsi_panjang' => 'required',
            'id_kategori' => 'required',
            'link_video' => 'required',
            'sumber' => 'required',
            'foto' => 'required|image'
        ];

        $imageName = $request->validate($rules);
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public/materi', $imageName);

        $input = [
            'nama'    => $request->nama,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'link_video'    => $request->link_video,
            'sumber'    => $request->sumber,
            'foto'              => $imageName,
            'id_kategori'    => $request->id_kategori,
        ];

        Materi::where('id', $materivideo->id)->update($input);

        return redirect('/dashboard/materivideo')->with('berhasil', 'Salah satu data berhasil diubah! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materivideo)
    {
        Materi::destroy($materivideo->id);

        return redirect('/dashboard/materivideo')->with('berhasil', 'Salah satu data berhasil dihapus! ');
    }
}
