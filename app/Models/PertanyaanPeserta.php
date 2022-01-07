<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanPeserta extends Model
{
    use HasFactory;
    protected $table = "pertanyaan_peserta";
    protected $fillable = [
        'user_id',
        'master_pertanyaan_id',
        'nama_file'
    ];
    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
    public function masterPertanyaan()
    {
        return $this->hasMany(Peserta::class);
    }
}
