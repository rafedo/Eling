<?php

namespace App\Http\Controllers;

use App\Http\Resources\MateriVideoResource;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriVideoApiController extends Controller
{
    public function getAll()
    {
        $materivideos = Materi::all();

        return MateriVideoResource::collection($materivideos);
    }

    public function getOne($id)
    {
        $materivideos = Materi::findOrFail($id);


        return new MateriVideoResource($materivideos);
    }
}
