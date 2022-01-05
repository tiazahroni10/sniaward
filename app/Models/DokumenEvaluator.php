<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenEvaluator extends Model
{
    use HasFactory;
    protected $table = "dokumen_evaluator";
    protected $fillable = [
        'nama_file'
    ];
}
