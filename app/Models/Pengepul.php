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
        'tlp',
        'alamat',       
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
