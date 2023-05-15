<?php

namespace App\Http\Controllers;

use App\Models\DashboardMateriVideo;
use App\Models\Materi;
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
        return view('dashboard.materivideo.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'id_kategory' => 'required|max:255',
            'link' => 'required|max:255'
        ]);

        Materi::create($validatedData);

        return redirect('/dashboard/materivideo')->with('berhasil', 'menambahkan data kategori baru!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $Materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $Materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $Materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $Materi)
    {
        //
    }
}
