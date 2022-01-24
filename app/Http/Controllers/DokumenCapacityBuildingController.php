<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DokumenCapacityBuildingController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/capacitybuilding',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function uploadCapacityBuilding(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/uploadcapacitybuilding',$data = [
            'menu' => 'Dokumen',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
