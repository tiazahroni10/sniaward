<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenugasanSe extends Model
{
    use HasFactory;
    protected $table = "penugasan_se";
    protected $guarded = [''];

    public function getPenugasanWithEvaluator($user_id){
        $ret_val = DB::table('penugasan_se')
            ->join('evaluator', 'evaluator.user_id', '=', 'penugasan_se.evaluator_id')
            ->select('penugasan_se.*','evaluator.nama_lengkap')
            ->where('peserta_id',$user_id)
            ->get()->first();
        return $ret_val;
    }

    public function getPenugasanByIdEvaluator($id)
    {
        $ret_val = DB::table('penugasan_se')
            ->join('peserta', 'peserta.user_id', '=', 'penugasan_se.peserta_id')
                ->select('penugasan_se.mulai','penugasan_se.hingga','peserta.nama_organisasi','penugasan_se.id','penugasan_se.status')
                // ->where('status',0)
                ->where('evaluator_id',$id)
                ->get();
        return $ret_val;
    }
}
