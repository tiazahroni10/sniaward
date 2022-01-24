<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MasterDokumenController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/masterdokumen',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahDokumen(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/tambahDokumen',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
