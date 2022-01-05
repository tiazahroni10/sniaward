<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenCapacityBuilding extends Model
{
    use HasFactory;
    protected $table = "dokumen_capacity_building";
    protected $fillable = [
        'nama_file'
    ];
}
