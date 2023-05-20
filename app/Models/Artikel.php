<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $guarded =['id', 'created_at', 'uploaded_at'];
    protected $fillable = [
        'nama',
        'id_kategori',
        'link',
        'foto',       
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relasi antar tabel artikel dan kategori
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}

