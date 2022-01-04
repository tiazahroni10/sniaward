<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKotaKabupaten extends Model
{
    use HasFactory;
    protected $table = "master_kota_kabupaten";
    protected $fillable = [
        'nama_kota_kabupaten'
    ];
}
