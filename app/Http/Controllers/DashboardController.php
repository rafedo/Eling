<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function showItems(){
        $data = Kategori::get();
        $no = 1;    

        return view('dashboard.index', ['datas' => $data, 'no' => $no]);
    }
}
