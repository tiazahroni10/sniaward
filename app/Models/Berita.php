<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar'
    ];

    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
    
}
