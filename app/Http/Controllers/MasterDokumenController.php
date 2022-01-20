<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class MasterDokumenController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/masterdokumen',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahDokumen(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/tambahDokumen',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
