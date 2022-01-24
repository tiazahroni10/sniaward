<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    use HasFactory;
    protected $table = "evaluator";
    protected $guarded = [''];

    public function user()
    {
        return $this->hasOne(Peserta::class);
    }

    public function masterProvinsi()
    {
        return $this->hasMany(Peserta::class);
    }

    public function masterKotaKabupaten()
    {
        return $this->hasMany(Peserta::class);
    }
}
