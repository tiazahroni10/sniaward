<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    use HasFactory;
    protected $table = "evaluator";
    protected $fillble = [
        'nama_lengkap',
        'status',
        'npwp',
        'ktp',
        'cv'
    ];

    public function user()
    {
        return $this->hasOne(Peserta::class);
    }
}
