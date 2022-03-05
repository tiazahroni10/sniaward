<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\MasterKotaKabupaten;
use App\Models\MasterProvinsi;
use App\Models\MasterSektorKategori;
use App\Models\MasterSni;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $this->peserta = new Peserta();
        $this->feedback = new Feedback();
    }
    public function index()
    {   $dataPeserta = Peserta::all();
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        return view('peserta.profil',$data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPeserta' => $dataPeserta,
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
        $dataProfil = $this->peserta->getPesertaWithUserId($id);
        $dataSni = MasterSni::all();
		$feedback = $this->feedback->getFeedbackWithStatus($id);
        return view('peserta/edit',$data = [
            'menu' => 'Profil',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataProvinsi' => $dataProvinsi,
            'dataKabupaten' => $dataKabupaten,
            'dataSni' => $dataSni,
            'dataSektorKategori' => $dataSektorKategori,
            'dataProfil'=> $dataProfil,
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
        if($request->file('gambar')){
                if($request->oldGambar){
                    Storage::delete($request->oldGambar); 
                }
                $data['gambar']= $request->file('gambar')->store('profil-peserta');
        }
        else{
                $data['gambar']= null;
        }
        // $validatedData = $request->validate([
        //     'nama_kampus' => ['required','max:8'],
        //     'jenjang' => ['required'],
        //     'tahun_lulus' => ['required'],
        //     'ijazah' =>['required']
        // ]);
        DB::table('peserta')
        ->where('user_id', $id)
        ->update(['nama_organisasi' => $request->nama_organisasi,
                'master_sni_id' => $request->master_sni_id,
                'alamat_organisasi' => $request->alamat_organisasi,
                'alamat_pabrik' => $request->alamat_pabrik,
                'master_provinsi_id' => $request->master_provinsi_id,
                'master_kota_kabupaten_id' => $request->master_kota_kabupaten_id,
                'email_perusahaan' => $request->email_perusahaan,
                'nomor_telepon' => $request->nomor_telepon,
                'website' => $request->website,
                'tahun_berdiri' => $request->tahun_berdiri,
                'status_kepemilikan' => $request->status_kepemilikan,
                'tipe_produk' => $request->tipe_produk,
                'master_sektor_kategori_id' => $request->master_sektor_kategori_id,
                'kekayaan_organisasi' => $request->kekayaan_organisasi,
                'hasil_penjualan_organisasi' => $request->hasil_penjualan_organisasi,
                'tipe_organisasi' => $request->tipe_organisasi,
                'gambar' => $data['gambar']
            ]);
        // $dataProfil = Peserta::where('user_id',$id)->get()->first();
        // $dataProfil->update($data);
        return redirect()->route('profilpeserta.index')->with('sukses','Data Profil berhasi diubah');
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
    
    
    public function dataTables()
    {
        $model = Peserta::query();
        return DataTables::eloquent($model)
                ->addColumn('action', function(Peserta $peserta) {
                    return '<a href="/admin/detailpeserta/'.$peserta->user_id.'"><span class="badge badge-info">Info</span></a>';
                })
                ->toJson(); 
    }

    public function showDataPeserta()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataPeserta = Peserta::all();
        return view('admin.peserta.index',$data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPeserta' => $dataPeserta
        ]);
    }

    public function detailPeserta($user_id)
    {
        $idUser = auth()->user()->id;
        $data = $this->user->getUser($idUser);
        $dataPeserta = $this->peserta->dataPeserta($user_id)->first();
        return view('admin.peserta.show', $data = [
            'menu' => 'Peserta',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPeserta' => $dataPeserta
        ]);
    }

    
}
