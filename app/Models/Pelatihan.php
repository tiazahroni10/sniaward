<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $table ="pelatihan";
    protected $fillable=[
        'user_id',
        'nama_pelatihan',
        'tgl_mulai',
        'tgl_selesai'
    ];

    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
}
