<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded =['id'];
    protected $fillable = [
        'jenis_kategori',
        'desc',
        'foto',       
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
