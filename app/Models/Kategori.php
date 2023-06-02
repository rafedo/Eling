<?php

namespace App\Models;

use App\Models\Materi;
use App\Models\Artikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = ['id', 'created_at', 'uploaded_at'];
    protected $fillable = [
        'jenis_kategori',
        'deskripsi_singkat',
        'deskripsi_panjang',
        'foto',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // -- Relasi antara tabel materi dan kategori --
    // satu kategori memilik banyak artikel
    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'id_kategori');
    }

    // satu kategori mempunyai banyak materi
    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_kategori');
    }
}
