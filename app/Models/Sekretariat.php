<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekretariat extends Model
{
    use HasFactory;
    protected $table = "sekretariat";
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'gambar'
    ];

    public function user()
    {
        return $this->hasOne(Peserta::class);
    }
}
