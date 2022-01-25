<?php

namespace App\Http\Controllers;

use App\Models\MasterPertanyaan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class MasterPertanyaanController extends Controller
{
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index(){

        $id = auth()->user()->id;
        $dataPertanyaan = MasterPertanyaan::all();
        $data = $this->user->getUser($id);
        return view('admin/masterpertanyaan',$data = [
            'dataPertanyaan' => $dataPertanyaan,
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function formTambahPertanyaan(){

        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/tambahPertanyaan',$data = [
            'menu' => 'Data Master',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function tambahPertanyaan(Request $request)
    {
        $validatedData = $request->validate([
            'tipe_pertanyaan' => ['required'],
            'pertanyaan' => ['required']
        ]);
        $ret_val = MasterPertanyaan::create($validatedData);
        $request->session()->flash('sukses','Pertanyaan berhasil ditambahkan');
        return redirect('/admin/masterpertanyaan');

    }
}
