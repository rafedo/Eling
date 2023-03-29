<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $guarded =[];

    //Relasi antara tabel artikel dan kategori
    public function id_kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
