<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    
    use HasFactory;
    protected $table = "peserta";
    protected $fillable = [
        'user',
        'master_kota_kabupaten_id',
        'master_sektor_kategori_id',
        'master_sni_id',
        'master_provinsi_id',
        'nama_organisasi'
    ];

    public function user()
    {
        return $this->hasOne(Peserta::class);
    }
    public function masterSektorKategori()
    {
        return $this->hasMany(Peserta::class);
    }

    public function masterKotaKabupaten()
    {
        return $this->hasMany(Peserta::class);
    }
    public function masterSni()
    {
        return $this->hasMany(Peserta::class);
    }
}
