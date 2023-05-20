<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded =['id', 'created_at', 'uploaded_at'];
    protected $fillable = [
        'jenis_kategori',
        'deskripsi',
        'foto',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relasi antara tabel materi dan kategori
    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
