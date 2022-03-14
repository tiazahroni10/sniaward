<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\PenugasanDe;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PenugasanDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->user = new User();
        $this->peserta = new Peserta();
        $this->penugsanDe = new PenugasanDe();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        // $dataDe = PenugasanDe::all();
        return view('admin.penugasande.index', $data = [
            'menu' => 'Penjadwalan Acara',
            'data' => $data,
            'peran' => auth()->user()->peran,
            // 'dataPenugasanDe' => $dataDe
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'evaluator_id' => ['required'],
            'mulai' => ['required'],
            'hingga' => ['required'],
            'peserta_id' => ['required'],
            'lokasi_perusahaan' => ['required'],
            'nama_organisasi' => ['required']
        ]);
        $validatedData['kategori'] = 'de';
        $validatedData['status'] = false;
        $validatedData['admin_id'] = auth()->user()->id;
        PenugasanDe::create($validatedData);
        return redirect()->route('penugasande.index')->with('sukses','penugasan berhasil ditambahkan');
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

    public function deTables()
	{
		$model = Peserta::query();
		return DataTables::eloquent($model)
			->addColumn('action', function (Peserta $peserta) {
				return '<a href="/admin/de/data/' . $peserta->user_id . '"><span class="badge badge-info">Info</span></a>';
			})
			->toJson();
	}
    public function penugasanDePeserta($user_id)
    {

        $idUser = auth()->user()->id;
		$data = $this->user->getUser($idUser);
		$dataPeserta = $this->peserta->dataPeserta($user_id)->first();
        $dataEvaluator = Evaluator::where('flag_complated',1)->get();
        $dataPenugasanDe = $this->penugsanDe->getPenugasanWithEvaluator($user_id);
		return view('admin.penugasande.show', $data = [
			'menu' => 'Peserta',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta,
            'dataEvaluator' => $dataEvaluator,
            'dataPenugasanDe' => $dataPenugasanDe
		]);
    }
}
