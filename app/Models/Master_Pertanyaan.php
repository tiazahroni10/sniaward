<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_pertanyaan',
        'pertanyaan',
    ];
}
