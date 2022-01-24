<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MasterPertanyaanController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getPeserta($id);
        return view('admin/masterpertanyaan',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahPertanyaan(){

        $id = auth()->user()->id;
        $data = $this->user->getPeserta($id);
        return view('admin/tambahPertanyaan',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
