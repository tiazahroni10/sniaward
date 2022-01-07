<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";
    use HasFactory;

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
