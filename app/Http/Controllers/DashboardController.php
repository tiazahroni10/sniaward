<?php

namespace App\Http\Controllers;

use App\Models\Peserta;

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
        // dd($data);        
        return view('evaluator',
        [   
            'title' => 'Dashboard | Admin',
            'data' => $data

        ]);
    }
}
