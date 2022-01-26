<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\MasterKotaKabupaten;
use App\Models\MasterProvinsi;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $user;
    function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataEvaluator = Evaluator::all();
        return view('admin/evaluator/index',$data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataEvaluator' => $dataEvaluator
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/evaluator/create', $data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' =>['required'],
            'email' => ['required','email:dns'],
            'status' => ['required']
        ]);
        $validatedData['password'] = bcrypt('1111');
        $validatedData['peran'] = 'evaluator';
        $ret_val = User::create($validatedData);
        $id = $ret_val->id;
        $dataEvaluator = ([
            'user_id' => $id,
            'status' =>$validatedData['status'],
            'nama_lengkap' => $validatedData['nama_lengkap']

        ]);
        Evaluator::create($dataEvaluator);
        $request->session()->flash('sukses','Evaluator berhasil ditambahkan');
        return redirect()->route('evaluator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataProvinsi = MasterProvinsi::all();
        $dataKabupaten = MasterKotaKabupaten::all();
        $idUser = auth()->user()->id;
        $data = $this->user->getUser($idUser);
        return view('evaluator/edit', $data = [
            'menu' => 'Profil',
            'dataKabupaten' => $dataKabupaten,
            'dataProvinsi' => $dataProvinsi,
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profil()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('evaluator/profil', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
}
