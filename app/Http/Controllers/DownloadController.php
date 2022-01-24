<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DownloadController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new user();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/download',$data = [
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
