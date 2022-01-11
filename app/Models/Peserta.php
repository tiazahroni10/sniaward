<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peserta extends Model
{
    
    use HasFactory;
    protected $table = "peserta";

    protected $guarded = [''];

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

    public function getPeserta($id) 
    {
        return $this->firstWhere('user_id',$id);
    }


}
