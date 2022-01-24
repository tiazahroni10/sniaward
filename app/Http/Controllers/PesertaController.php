<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/peserta',$data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function profil(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta/profil',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editProfil(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta/editprofil',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editKontak(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta/editkontak',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
