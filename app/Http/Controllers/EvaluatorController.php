<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;


class EvaluatorController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/evaluator',$data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }

    public function tambahEvaluator()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/tambahevaluator', $data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function profil()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('evaluator/profil', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function editProfil()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('evaluator/editprofil', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }

    public function editPendidikan()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('evaluator/editpendidikan', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
