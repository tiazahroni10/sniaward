<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DokumenPeserta extends Model
{
    use HasFactory;
    protected $table = "dokumen_peserta";
    protected $guarded = [''];
    public function user()
    {
        return $this->hasMany(Peserta::class);
    }
    public function masterDokumen()
    {
        return $this->hasMany(Peserta::class);
    }
    public function getDataDoc($id){
        $data = DB::table('master_unggah_lampiran')
            ->join('dokumen_peserta', 'master_unggah_lampiran.id', '=', 'dokumen_peserta.master_unggah_lampiran_id')
            ->select('master_unggah_lampiran.*', 'dokumen_peserta.nama_file','dokumen_peserta.user_id')
            ->where('user_id',$id)
            ->get();
        return $data;
    }
}
