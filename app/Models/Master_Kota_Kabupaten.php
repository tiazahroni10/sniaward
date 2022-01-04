<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Kota_Kabupaten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kota_kabupaten'
    ];
}
