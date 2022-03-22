<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenugasanDe extends Model
{
    use HasFactory;
    protected $table = "Penugasan_de";
    protected $guarded = [''];

    public function getPenugasanWithEvaluator($user_id){
        $ret_val = DB::table('penugasan_de')
            ->join('evaluator', 'evaluator.user_id', '=', 'penugasan_de.evaluator_id')
            ->select('penugasan_de.*','evaluator.nama_lengkap')
            ->where('peserta_id',$user_id)
            ->get()->first();
        return $ret_val;
    }

    public function getPenugasan($idEvaluator){
        $ret_val = DB::table('penugasan_de')
        ->select('peserta_id','id','nama_organisasi','status')
        ->where('evaluator_id',$idEvaluator)
        ->get();
        return $ret_val;
    }
    public function verifikasiPenugasanDe($id,$evaluator_id, $peserta_id)
    {
        $ret_val = DB::table('penugasan_de')
        ->where('id',$id)
        ->where('evaluator_id',$evaluator_id)
        ->where('peserta_id',$peserta_id)
        ->update(['status'=>1]);
        return $ret_val;

    }
}
