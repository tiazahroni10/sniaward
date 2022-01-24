<?php

namespace App\Http\Controllers;

use App\Models\MasterKotaKabupaten;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MasterProvinsi;


class EvaluatorController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/evaluator',$data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }

    public function tambahEvaluator()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/tambahevaluator', $data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function profil()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/profil', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editProfil()
    {   
        $dataProvinsi = MasterProvinsi::all();
        $dataKabupaten = MasterKotaKabupaten::all();
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/editprofil', $data = [
            'menu' => 'Profil',
            'dataKabupaten' => $dataKabupaten,
            'dataProvinsi' => $dataProvinsi,
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }

    public function tambahPendidikan()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/tambahpendidikan', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahPekerjaan()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/tambahpekerjaan', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahSertifikat()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/tambahsertifikat', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
