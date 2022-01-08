<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table= "pekerjaan";
    protected $fillable = [
        'user_id',
        'jabatan',
        'instansi',
        'tahun_mulai',
        'tahun_selesai'
    ];

    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
}
