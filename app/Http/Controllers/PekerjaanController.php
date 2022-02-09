<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\User;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
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
        $dataPekerjaan = Pekerjaan::where('user_id',$id)->get();
        return view('evaluator.pekerjaan.index', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPekerjaan' => $dataPekerjaan
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
        return view('evaluator.pekerjaan.create', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
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
            'instansi' => ['required'],
            'jabatan' => ['required'],
            'tahun_mulai' => ['required'],
            'tahun_selesai' => ['required']
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        Pekerjaan::create($validatedData);
        return redirect()->route('pekerjaan.index')->with('sukses','Data pekerjaan berhasil ditambahkan');
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
        $idUser = auth()->user()->id;
        $data = $this->user->getUser($idUser);
        $dataPekerjaan = Pekerjaan::findOrFail($id);
        return view('evaluator.pekerjaan.edit', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPekerjaan' => $dataPekerjaan
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
        $validatedData = $request->validate([
            'instansi' => ['required'],
            'jabatan' => ['required'],
            'tahun_mulai' => ['required'],
            'tahun_selesai' => ['required']
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $dataPekerjaan = Pekerjaan::findOrFail($id);
        $dataPekerjaan->update($validatedData);
        return redirect()->route('pekerjaan.index')->with('sukses','Data pekerjaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data   = Pekerjaan::findOrFail($id);
        $data->delete();
        return redirect()->route('pekerjaan.index')->with('sukses','Pekerjaan berhasil dihapus');
    
    }
}
