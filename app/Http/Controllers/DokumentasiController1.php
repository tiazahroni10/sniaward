<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DokumentasiController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/dokumentasi/index',$data = [
            'menu' => 'Dokumentasi',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahDokumentasi(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/dokumentasi/create',$data = [
            'menu' => 'Dokumentasi',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
