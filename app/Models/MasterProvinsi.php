<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProvinsi extends Model
{
    use HasFactory;
    protected $table = "master_provinsi";
    protected $fillable = [
        'nama_provinsi'
    ];

    public function peserta()
    {
        $this->belongsTo(User::class);
    }

    public function evaluator()
    {
        $this->belongsTo(User::class);
    }
}
