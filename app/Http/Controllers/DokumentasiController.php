<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class DokumentasiController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/dokumentasi',$data = [
            'menu' => 'Dokumentasi',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahDokumentasi(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/tambahdokumentasi',$data = [
            'menu' => 'Dokumentasi',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
