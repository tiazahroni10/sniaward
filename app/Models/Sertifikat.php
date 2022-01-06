<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    protected $table = "sertifikat";
    protected $fillable = [
        'nama_sertifikat',
        'nama_file'
    ];
    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
}
