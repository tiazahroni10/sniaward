<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;

class DashboardController extends Controller
{
    private $peserta;

    function __construct()
    {
        $this->peserta = new Peserta();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
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
