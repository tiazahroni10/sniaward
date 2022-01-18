<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;


class BeritaController extends Controller
{
    private $peserta;
    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        return view('admin/berita',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
