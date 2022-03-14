<?php

namespace App\Http\Controllers;

use App\Models\DokumenPeserta;
use App\Models\Feedback;
use App\Models\PenugasanDe;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BerkasLampiranPesertaController extends Controller
{
	private $user;
	function __construct()
	{
		$this->user = new User();
		$this->feedback = new Feedback();
		$this->berkasPeserta = new DokumenPeserta();
		$this->penugasanDe = new PenugasanDe();
		$this->peserta = new Peserta();
	}

	public function index()
	{
		$id = auth()->user()->id;
		$data = $this->user->getUser($id);
		// $dataPeserta = Peserta::all('user_id', 'nama_organisasi');
		// dd($dataPeserta);
		$idPeserta = $this->penugasanDe->getIdPeserta($id);
		$dataPeserta= [];
		foreach ($idPeserta as $id) {
			$dataPeserta[] = $this->peserta->getNamaPeserta($id->peserta_id);
		}
		// dd($dataPeserta);
		return view('evaluator.berkas_peserta.index', $data = [
			'menu' => 'Data Master',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta,
		]);
	}

	public function detail($id)
	{
		$dataPeserta = Peserta::findOrFail($id);
		$idEvaluator = auth()->user()->id;
		$dataFeedback = $this->feedback->getFeedback($id,$idEvaluator);
		$oldFeedback = $this->feedback->oldFeedback($id,0);
		$dataDokumen = $this->berkasPeserta->getDataDoc($id);

		$tampilkanFormFeedback = false;
		foreach ($dataDokumen as $dokumen) {
			if ($dokumen->status == 2 || $dokumen->status == 0) {
				$tampilkanFormFeedback = true;
				break;
			}
		}
		$data = $this->user->getUser($idEvaluator);
		return view('evaluator.berkas_peserta.detail', $data = [
			'menu' => 'Data Master',
			'dataEvaluator' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta,
			'dataDokumen' => $dataDokumen,
			'dataFeedback' => $dataFeedback,
			'oldFeedback' =>$oldFeedback,
			'tampilkanFormFeedback' => $tampilkanFormFeedback
		]);
	}

	public function verifikasiBerkasDokumen($id,$user_id,$master_lampiran_id)
	{
		$ret_val = $this->berkasPeserta->varifikasi($id, $user_id, $master_lampiran_id);
		if ($ret_val) {
            return redirect()->route('detailBerkasDokumen',$user_id)->with('sukses','Dokumen berhasil di verifikasi');
        }
        else {
            return redirect()->route('detailBerkasDokumen',$user_id)->with('gagal','Dokumen gagal di verifikasi');
        }
	}
	public function lengkapiBerkasDokumen($id,$user_id,$master_lampiran_id)
	{
		$ret_val = $this->berkasPeserta->lengkapiDokumen($id, $user_id, $master_lampiran_id);
		if ($ret_val) {
            return redirect()->route('detailBerkasDokumen',$user_id)->with('lengkapi','Dokumen belum lengkap');
        }
        else {
            return redirect()->route('detailBerkasDokumen',$user_id)->with('gagal','Dokumen gagal di verifikasi');
        }
	}

	public function feedback(Request $request)
	{
		$validatedData = $request->validate([
			'peserta_id' => ['required'],
			'evaluator_id' => ['required'],
			'deskripsi' => ['required']
		]);
		$validatedData['potongan_deskripsi'] = Str::limit(strip_tags($validatedData['deskripsi']), 50);
		$validatedData['status'] = true;
		Feedback::create($validatedData);
		
		return redirect()->route('berkasDokumen');
	}

}
