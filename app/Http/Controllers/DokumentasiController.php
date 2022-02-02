<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\User;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
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
        $dataGambar = Gambar::all();
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin/dokumentasi/index',$data = [
            'menu' => 'Dokumentasi',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataGambar' => $dataGambar
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
        return view('admin/dokumentasi/create',$data = [
            'menu' => 'Dokumentasi',
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
        $validateData = $request->validate([
            'judul' => ['required'],
            'deskripsi' => ['required'],
            'nama_file' => 'required|file|mimes:jpg,png,jpeg|max:2048'
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['nama_file'] = $request->file('nama_file')->store('dokumentasi');
        $ret_val = Gambar::create($validateData);
        $request->session()->flash('sukses','Dokumentasi berhasil ditambahkan');
        return redirect()->route('dokumentasi.index');

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
