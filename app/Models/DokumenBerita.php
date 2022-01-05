<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenBerita extends Model
{
    use HasFactory;
    protected $table = "dokumen_berita";
    protected $fillable = [
        'nama_file'
    ];
}
