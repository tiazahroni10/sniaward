<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function profil(){

        $id = auth()->user()->id;
        $data = $this->user->getPeserta($id);
        return view('admin/profil',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
