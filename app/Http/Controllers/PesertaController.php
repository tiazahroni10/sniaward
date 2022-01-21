<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/peserta',$data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function profil(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('peserta/profil',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editProfil(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('peserta/editprofil',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editKontak(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('peserta/editkontak',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
