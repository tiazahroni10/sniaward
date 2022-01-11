<?php

namespace App\Http\Controllers;

use App\Models\MasterPertanyaan;
use App\Models\PertanyaanPeserta;
use App\Models\User;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function __construct()
    {
        $this->pertanyaan = new MasterPertanyaan();
        $this->jawaban = new PertanyaanPeserta();
    }
    public function index()
    {
        $tipe_pertanyaan = 'Register';
        $data = $this->pertanyaan->getPertanyaan($tipe_pertanyaan);
        return view('pertanyaan',[
            'title' => 'Pertanyaan',
            'data' => $data
        ]);
    }
    
    public function pertanyaan(Request $request)
    {
        $validateData = $request->validate([
            'jawaban1' =>['required'],
            'jawaban2' =>['required'],
            'jawaban3' =>['required'],
        ]);
        $tipe_pertanyaan = 'Register';
        $validateData['user_id'] = User::latest()->first()->id; //memasukkan id pada variabel validateData

        $validateData = collect($validateData);     //menjadikan validateData collection

        $data = $this->pertanyaan->getPertanyaan($tipe_pertanyaan); //mengambil data id dan pertanyaan pada tabel master pertanyaan
        dd($validateData);
        foreach ($data as $item) { 
            return $this->jawaban->inputDataPertanyaanPeserta($item,$validateData);
        }

        
    }
    
}
