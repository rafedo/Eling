<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';
    protected $guarded =['id'];
    protected $fillable = [
        'name',
        'id_kategori',
        'link',       
    ];

    public function id_kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
