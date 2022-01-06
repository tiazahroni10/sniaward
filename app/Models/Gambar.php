<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $table = "gambar";

    protected $fillable = [
        'judul',
        'nama_file'
    ];

    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
}
