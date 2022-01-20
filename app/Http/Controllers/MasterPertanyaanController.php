<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class MasterPertanyaanController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/masterpertanyaan',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahPertanyaan(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/tambahPertanyaan',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
