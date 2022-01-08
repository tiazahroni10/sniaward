<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenEvaluator extends Model
{
    use HasFactory;
    protected $table = "dokumen_evaluator";
    protected $fillable = [
        'user_id',
        'master_dokumen_id',
        'nama_file'
    ];

    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
    public function masterDokumen()
    {
        return $this->hasMany(Peserta::class);
    }
}
