<?php

namespace App\Http\Controllers;

use App\Models\DokumenPeserta;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;

class BerkasLampiranPesertaController extends Controller
{
	private $user;
	function __construct()
	{
		$this->user = new User();
		$this->berkasPeserta = new DokumenPeserta();
	}

	public function index()
	{
		$id = auth()->user()->id;
		$data = $this->user->getUser($id);
		$dataPeserta = Peserta::all('user_id', 'nama_organisasi');
		return view('evaluator.berkas_peserta.index', $data = [
			'menu' => 'Data Master',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta
		]);
	}

	public function detail($id)
	{
		$dataPeserta = Peserta::findOrFail($id);
		$dataDokumen = $this->berkasPeserta->getDataDoc($id);
		$data = $this->user->getUser(auth()->user()->id);
		return view('evaluator.berkas_peserta.detail', $data = [
			'menu' => 'Data Master',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataPeserta' => $dataPeserta,
			'dataDokumen' => $dataDokumen
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
}
