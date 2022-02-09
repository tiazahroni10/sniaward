<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\MasterKotaKabupaten;
use App\Models\MasterProvinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

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
        return view('evaluator.profil', $data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran
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
        $dataEvaluator = Evaluator::where('user_id',$id)->get()->first();
        $data = $this->user->getUser($idUser);
        return view('evaluator.edit', $data = [
            'menu' => 'Profil',
            'dataKabupaten' => $dataKabupaten,
            'dataProvinsi' => $dataProvinsi,
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataEvaluator' => $dataEvaluator
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
        if($request->file('gambar')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar); 
            }
            $data['gambar']= $request->file('gambar')->store('profil-evaluator');
        }
        else $data['gambar']= null;

        if($request->file('npwp')){
            if($request->oldNpwp){
                Storage::delete($request->oldNpwp); 
            }
            $data['npwp']= $request->file('npwp')->store('profil-evaluator');
        }
        else $data['npwp']= null;
        
        if($request->file('ktp')){
            if($request->oldKtp){
                Storage::delete($request->oldKtp); 
            }
            $data['ktp']= $request->file('ktp')->store('profil-evaluator');
        }
        else $data['ktp'] = null;

        if($request->file('cv')){
            if($request->oldCv){
                Storage::delete($request->oldCv); 
            }
            $data['cv']= $request->file('cv')->store('profil-evaluator');
        }
        else $data['cv']= null;
        DB::table('evaluator')
                ->where('user_id', $id)
                ->update(['nama_lengkap' => $request->nama_lengkap,
                        'gelar_sebelum_nama' => $request->gelar_sebelum_nama,
                        'gelar_setelah_nama' => $request->gelar_setelah_nama,
                        'tgl_lahir' => $request->tgl_lahir,
                        'pekerjaan' => $request->pekerjaan,
                        'nama_instansi' => $request->nama_instansi,
                        'jenis_kelamin' => $request->jenis_kelamin,
                        'alamat' => $request->alamat,
                        'master_provinsi_id' => $request->master_provinsi_id,
                        'master_kota_kabupaten_id' => $request->master_kota_kabupaten_id,
                        'nomor_telepon' => $request->nomor_telepon,
                        'gambar' => $data['gambar'],
                        'npwp' => $data['npwp'],
                        'ktp' => $data['ktp'],
                        'cv' => $data['cv']
                    ]);
        return redirect()->route('profilevaluator.index')->with('sukses','Data profil berhasi diubah');
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
        
    }

    public function dataTables()
    {
        return DataTables ::of(Evaluator::query())
        ->addColumn('action',function($model){
            return '<a href="#">Edit</> <a href="##">Hapus</>';
        })
        ->make(true); 
    }


    // FUNCTION UNTUK ADMIN

    public function storeEvaluator(Request $request)
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
        return redirect()->route('showDataEvaluator');
    }
    public function createEvaluator()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin.evaluator.create', $data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran,
        ]);
    }
    public function showDataEvaluator()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataEvaluator = Evaluator::all();
        return view('admin.evaluator.index',$data = [
            'menu' => 'Evaluator',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataEvaluator' => $dataEvaluator
        ]);
    }

}
