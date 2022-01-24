<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProfilController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function profil(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta/profil',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
