<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;

class DashboardController extends Controller
{
    private $peserta;
    private $user;

    function __construct()
    {
        $this->peserta = new Peserta();
        $this->user = new User();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->peserta->getPeserta($id);
        if(auth()->user()->peran ==='peserta')
        {
            return view('evaluator',
            [   
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
        elseif (auth()->user()->peran ==='evaluator') {
            return view('evaluator',
            [   
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
        else {
            return view('evaluator',
            [   
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
    }
}
