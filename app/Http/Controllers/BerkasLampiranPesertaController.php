<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;

class BerkasLampiranPesertaController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataPeserta = Peserta::all('user_id','nama_organisasi');
        return view('evaluator.berkas_peserta.index',$data=[
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPeserta' => $dataPeserta
        ]);

    }
    
}
