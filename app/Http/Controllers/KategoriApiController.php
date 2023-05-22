<?php

namespace App\Http\Controllers;

use App\Http\Resources\KategoriResource;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    public function getAll()
    {
        $kategoris = Kategori::all();

        return KategoriResource::collection($kategoris);
    }

    public function getOne($id)
    {
        $posts = Kategori::findOrFail($id);


        return new KategoriResource($posts);
    }
}
