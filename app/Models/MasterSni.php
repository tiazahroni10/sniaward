<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSni extends Model
{
    use HasFactory;
    protected $table = "master_sni";
    protected $fillable = [
        'nomor_sni',
        'tipe_sni'
    ];

    public function peserta()
    {
        $this->belongsTo(User::class);
    }

}
