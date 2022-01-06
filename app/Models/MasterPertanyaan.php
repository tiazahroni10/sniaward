<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPertanyaan extends Model
{
    use HasFactory;
    protected $table = "master_pertanyaan";
    protected $fillable = [
        'tipe_pertanyaan',
        'pertanyaan',
    ];
    public function pertanyaanPeserta()
    {
        $this->belongsTo(User::class);
    }
}
