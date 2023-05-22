<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtikelResource;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelApiController extends Controller
{
    public function getAll()
    {
        $artikels = Artikel::all();

        return ArtikelResource::collection($artikels);
    }

    public function getOne($id)
    {
        $artikels = Artikel::findOrFail($id);


        return new ArtikelResource($artikels);
    }
}
