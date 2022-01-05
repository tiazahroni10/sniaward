<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanPeserta extends Model
{
    use HasFactory;
    protected $table = "pertanyaan_peserta";
    protected $fillable = [
        'nama_file'
    ];
}
