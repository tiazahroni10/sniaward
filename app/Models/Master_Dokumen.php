<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Dokumen extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tipe_dokumen',
        'format_file',
        'maks_ukuran',
        'wajib',
        'deskripsi'
    ];
}
