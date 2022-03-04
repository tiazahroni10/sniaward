<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Kontak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
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
        $this->feedback = new Feedback();
    }
    public function index()
    {   
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataKontak = DB::table('kontak')->where('user_id',$id)->get();
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        return view('peserta.kontak.index',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataKontak' => $dataKontak,
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
        return view('peserta.kontak.create',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
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
        $validatedData = $request->validate([
            'nama_lengkap' => ['required'],
            'jabatan' => ['required'],
            'nomor_telepon' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Kontak::create($validatedData);
        return redirect()->route('kontak.index')->with('sukses','Kontak berhasil ditambahkan');
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
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        $dataKontak = Kontak::findOrFail($id);
        return view('peserta.kontak.edit',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataKontak' => $dataKontak,
            'feedback' => $feedback
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
            'nama_lengkap' => ['required'],
            'jabatan' => ['required'],
            'nomor_telepon' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $dataKontak = Kontak::findOrFail($id);
        $dataKontak->update($validatedData);
        return redirect()->route('kontak.index')->with('sukses','Kontak berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data   = Kontak::findOrFail($id);
        $data->delete($data);
        return redirect()->route('kontak.index')->with('sukses','Kontak Persyaratan berhasil dihapus');
    }
}
