<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;
use App\Http\Resources\PengepulResource;

class PengepulApiController extends Controller
{
    public function getAll()
    {
        $pengepuls = Pengepul::all();

        return PengepulResource::collection($pengepuls);
    }

    public function getOne($id)
    {
        $pengepuls = Pengepul::findOrFail($id);


        return new PengepulResource($pengepuls);
    }
}
