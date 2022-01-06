<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSektorKategori extends Model
{
    use HasFactory;
    protected $table = "master_sektor_kategori";
    protected $fillable =[
        'nama_kategori'
    ];

    public function peserta()
    {
        $this->belongsTo(User::class);
    }
}
