<?php

namespace App\Http\Controllers;

use App\Models\DokumenPeserta;
use App\Models\Feedback;
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
    private $dokumen;
    function __construct()
    {
        $this->user = new User();
        $this->dokumen = new DokumenPeserta();
        $this->feedback = new Feedback();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        $dataDokumen = $this->dokumen->getDataDoc($id);
        return view('peserta.lampiran.index', $data = [
            'menu' => 'Unggah Lampiran',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataDokumen' => $dataDokumen,
            'feedback' => $feedback
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
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        $dataMasterLampiran = MasterUnggahLampiran::all();
        return view('peserta.lampiran.create', $data=[
            'menu' => 'Unggah Lampiran',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataMasterLampiran' => $dataMasterLampiran,
            'feedback' => $feedback
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
        $userId = auth()->user()->id;
        $arr = $request->file('nama_file');
        foreach($arr as $key=>$value){
            $array['user_id'] = $userId;
            $array['master_dokumen_id'] = 3;
            $array['master_unggah_lampiran_id'] = $key;
            $array['nama_file'] = $value->store('dokumen-peserta');
            DokumenPeserta::create($array);
        }
        return redirect()->route('lampiran.index')->with('sukses','Dokumen berhasil diunggah');
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
        //
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
}
