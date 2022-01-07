<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table="kontak";
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'jabatan',
        'nomor_telepon'
    ];
    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
}
