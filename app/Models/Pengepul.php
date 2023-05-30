<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengepul extends Model
{
    use HasFactory;

    protected $table = 'pengepul';
    protected $guarded =['id', 'created_at', 'uploaded_at'];

    protected $fillable = [
        'nama',
        'kategori',
        'alamat',
        'ketersediaan_hari',
        'ketersediaan_jam',
        'kontak',
        'maps',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relasi antar tabel galeri dan pengepul
    public function galeri()
    {
        return $this->belongsTo(kategori::class, 'id_galeri');
    }
}
