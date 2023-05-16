<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengepul extends Model
{
    use HasFactory;

    protected $table = 'pengepuls';
    protected $guarded =['id'];
    protected $fillable = [
        'kategori',
        'nama',
        'alamat',
        'ketersedian',
        'kontak',
        'id_galeri',
        'maps',
    ];

    public function id_galeri()
    {
        return $this->hasOne(Galeri::class);
    }
}
