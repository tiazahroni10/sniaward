<?php

namespace App\Http\Controllers;

use App\Models\MasterKotaKabupaten;
use App\Models\MasterProvinsi;
use App\Models\MasterSektorKategori;
use App\Models\MasterSni;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PesertaController extends Controller
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
    {   $dataPeserta = Peserta::all();
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('peserta.profil',$data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPeserta' => $dataPeserta
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
        $idUser = auth()->user()->id;
        $data = $this->user->getUser($idUser);
        $dataProvinsi = MasterProvinsi::all();
        $dataKabupaten = MasterKotaKabupaten::all();
        $dataSektorKategori = MasterSektorKategori::all();
        $dataSni = MasterSni::all();
        return view('peserta/edit',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataProvinsi' => $dataProvinsi,
            'dataKabupaten' => $dataKabupaten,
            'dataSni' => $dataSni,
            'dataSektorKategori' => $dataSektorKategori
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
        dd($request);
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
        return view('peserta/profil',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
    }
    public function dataTables()
    {
        return DataTables ::of(Peserta::query())
        ->addColumn('action',function($model){
            return '<a href="#">Edit</> <a href="##">Hapus</>';
        })
        ->make(true); 
    }
}
