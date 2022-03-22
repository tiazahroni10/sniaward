<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\JadwalAcara;
use App\Models\PenugasanSe;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PenugasanSeController extends Controller
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
        $this->penugasanSe = new PenugasanSe();
        $this->jadwalAcara = new JadwalAcara();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $dataSe = PenugasanSe::all();
        return view('admin.penugasanse.index', $data = [
            'menu' => 'Penjadwalan Acara',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataPenugasanSe' => $dataSe
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
            'peserta_id' => ['required']
        ]);
        $validatedData['kategori'] = 'se';
        $validatedData['status'] = false;
        $validatedData['admin_id'] = auth()->user()->id;
        PenugasanSe::create($validatedData);
        return redirect()->route('penugasanse.index')->with('sukses','penugasan berhasil ditambahkan');
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

    public function seTables()
	{
		$model = Peserta::query();
		return DataTables::eloquent($model)
			->addColumn('action', function (Peserta $peserta) {
				return '<a href="/admin/se/data/' . $peserta->user_id . '"><span class="badge badge-info">Info</span></a>';
			})
			->toJson();
	}

    public function penugasanSePeserta($user_id)
    {

        $idUser = auth()->user()->id;
		$data = $this->user->getUser($idUser);
		$dataPeserta = $this->peserta->dataPeserta($user_id)->first();
        $dataEvaluator = Evaluator::where('flag_complated',1)->get();
        $dataPenugasanSe = $this->penugasanSe->getPenugasanWithEvaluator($user_id);
		return view('admin.penugasanse.show', $data = [
			'menu' => 'Peserta',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta,
            'dataEvaluator' => $dataEvaluator,
            'dataPenugasanSe' => $dataPenugasanSe
		]);
    }

    public function showPenugasanSeById()
    {
        $idUser = auth()->user()->id;
		$data = $this->user->getUser($idUser);
        $jadwalAcara = $this->jadwalAcara->getJadwalAcara();
        $penugasanSe = $this->penugasanSe->getPenugasanByIdEvaluator($idUser);
		// $dataPeserta = $this->peserta->dataPeserta($id)->first();
        // $dataEvaluator = Evaluator::where('flag_complated',1)->get();
        // $dataPenugasanSe = $this->penugsanSe->getPenugasanWithEvaluator($id);
		return view('evaluator.penugasanse.index', $data = [
			'menu' => 'Peserta',
			'data' => $data,
			'peran' => auth()->user()->peran,
            'jadwalAcara' => $jadwalAcara,
            'penugasanSe' => $penugasanSe
		]);
    }

    public function uploadFilePenugasanSe(Request $request)
    {
        $validatedData = $request->validate([
            'id' => ['required'],
            'file_penilaian' => 'required|file|mimes:pdf|max:2048'
        ]);
        $validatedData['status'] = 2;
        $validatedData['file_penilaian'] = $request->file('file_penilaian')->store('dokumen-se');
        $tugas = PenugasanSe::findOrFail($validatedData['id']);
        $tugas->update($validatedData);

        return redirect()->route('penugasanSe')->with('sukses', 'file penilaian berhasil di unggah');
    }

    public function verifikasiPenugasanSe($id)
    {
        $ret_val = $this->penugasanSe->verifikasiPenugasanSe($id);
        return redirect()->route('penugasanSe')->with('sukses','verifikasi berhasil');
    }
}
