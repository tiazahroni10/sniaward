<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;

class DashboardController extends Controller
{
    private $user;

    function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        if(auth()->user()->peran ==='peserta')
        {
            return view('peserta/dashboard',
            [   
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
        elseif (auth()->user()->peran ==='evaluator') {
            return view('evaluator/dashboard',
            [  
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
        else {
            return view('admin/dashboard',
            [
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
    }
}
