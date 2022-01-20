<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class DokumenPersyaratanController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/persyaratan',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function uploadDokumen(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/uploadpersyaratan',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
