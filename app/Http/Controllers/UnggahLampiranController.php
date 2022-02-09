<?php

namespace App\Http\Controllers;

use App\Models\DokumenPeserta;
use App\Models\MasterUnggahLampiran;
use App\Models\User;
use Illuminate\Http\Request;

class UnggahLampiranController extends Controller
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
        $dataDokumen = MasterUnggahLampiran::all();
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dokumenPeserta = DokumenPeserta::where('user_id',$id)->get();
        return view('peserta.lampiran.index', $data = [
            'menu' => 'Unggah Lampiran',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dokumenPeserta' => $dokumenPeserta,
            'dataDokumen' => $dataDokumen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $dokumen = MasterUnggahLampiran::findOrFail($id);
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta.lampiran.create', $data = [
            'menu' => 'Unggah Lampiran',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dokumen' => $dokumen
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
            'nama_file' => ['required'],
        ]);
        $validatedData['nama_file'] =$request->file('nama_file')->store('dokumen-peserta');
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['master_dokumen_id'] = 3;
        $validatedData['master_unggah_lampiran_id'] = $id;
        DokumenPeserta::create($validatedData);
        return redirect()->route('lampiran.index')->with('sukses','Dokumen berhasil diunggah');
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
}
