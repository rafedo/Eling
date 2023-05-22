<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Resources\GaleriResource;

class GaleriApiController extends Controller
{
    public function getAll()
    {
        $galeris = Galeri::all();

        return GaleriResource::collection($galeris);
    }

    public function getOne($id)
    {
        $galeris = Galeri::findOrFail($id);


        return new GaleriResource($galeris);
    }
}
