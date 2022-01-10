<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
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
        return view('dashboard',
        [
            'data' => $data
        ]);
    }
}
