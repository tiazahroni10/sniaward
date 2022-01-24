<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DokumenPersyaratanController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/persyaratan',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function uploadDokumen(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/uploadpersyaratan',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
