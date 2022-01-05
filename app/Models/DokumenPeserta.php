<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPeserta extends Model
{
    use HasFactory;
    protected $table = "dokumen_peserta";
    protected $fillable = [
        'nama_file'
    ];
}
