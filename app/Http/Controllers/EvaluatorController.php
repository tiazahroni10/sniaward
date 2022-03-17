<?php

namespace App\Http\Controllers;

use App\Mail\KirimPassword;
use App\Models\Evaluator;
use App\Models\MasterKotaKabupaten;
use App\Models\MasterProvinsi;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Sertifikat;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

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
		$this->evaluator = new Evaluator();
	}
	public function index()
	{
		$dataProvinsi = MasterProvinsi::all();
		$dataKabupaten = MasterKotaKabupaten::all();
		$id = auth()->user()->id;
		$data = $this->user->getUser($id);
		$user = auth()->user()->evaluator;

		$dataPendidikan = [
			[
				"id" => 1,
				"nama_kampus" => "Cambridge University",
				"program_studi" => "Teknik Informatika",
				"jenjang" => "S1",
				"tahun_masuk" => "2018",
				"tahun_lulus" => "2022",
			],
			[
				"id" => 2,
				"nama_kampus" => "Depok University",
				"program_studi" => "Teknologi Lingkungan",
				"jenjang" => "S1",
				"tahun_masuk" => "2022",
				"tahun_lulus" => "2024",
			]
		];
		$dataPekerjaan = [
			[
				"id" => 1,
				"jabatan" => "Sales",
				"instansi" => "Googlee Cabang Depok",
				"tahun_mulai" => "2018",
				"tahun_selesai" => "2018",
			],
			[
				"id" => 2,
				"jabatan" => "CEO",
				"instansi" => "Googlee",
				"tahun_mulai" => "2018",
				"tahun_selesai" => "2020",
			],
		];
		$dataPelatihan = [
			[
				"id" => 1,
				"nama_pelatihan" => "Cara Membuat Akun Tiktok",
				"tgl_mulai" => "20-12-2022",
				"tgl_selesai" => "21-12-2022",
			],
			[
				"id" => 2,
				"nama_pelatihan" => "Cara Daftar Pinjol Aman",
				"tgl_mulai" => "28-12-2022",
				"tgl_selesai" => "29-12-2022",
			],
		];
		$dataDE = [
			[
				"id" => 1,
				'nama_kegiatan' => 'TikTok Influencer',
				'nama_instansi' => 'PT. Sunda Empire',
				'tahun' => '2020',
			],
			[
				"id" => 2,
				'nama_kegiatan' => 'TikTok Influencer Batch 2',
				'nama_instansi' => 'PT. Sunda Empire',
				'tahun' => '2021',
			],
		];
		$dataSE = [
			[
				"id" => 1,
				'nama_kegiatan' => 'TikTok Influencer',
				'nama_instansi' => 'PT. Sunda Empire',
				'lokasi_instansi' => 'Kerajaan Sunda',
				'tahun' => '2020',
			],
			[
				"id" => 2,
				'nama_kegiatan' => 'TikTok Influencer Batch 2',
				'nama_instansi' => 'PT. Sunda Empire',
				'lokasi_instansi' => 'Kerajaan Sunda',
				'tahun' => '2021',
			],
		];
		$dataSertifikat = [
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'Sertifikat 1'
			],
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'Sertifikat 2'
			],
		];
		$dataNPWP = [
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'NPWP 1'
			],
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'NPWP 2'
			],
		];
		$dataKTP = [
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'KTP 1'
			],
			[
				'url' => 'https://via.placeholder.com/150x80',
				'nama' => 'KTP 2'
			],
		];
		return view('evaluator.profil', $data = [
			'menu' => 'Profil',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'user' => $user,
			'dataProvinsi' => $dataProvinsi,
			'dataKabupaten' => $dataKabupaten,
			'dataPendidikan' => $dataPendidikan,
			'dataPekerjaan' => $dataPekerjaan,
			'dataPelatihan' => $dataPelatihan,
			'dataDE' => $dataDE,
			'dataSE' => $dataSE,
			'dataSertifikat' => $dataSertifikat,
			'dataNPWP' => $dataNPWP,
			'dataKTP' => $dataKTP,
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
		$dataEvaluator = Evaluator::where('user_id', $id)->get()->first();
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
		if ($request->file('gambar')) {
			if ($request->oldGambar) {
				Storage::delete($request->oldGambar);
			}
			$data['gambar'] = $request->file('gambar')->store('profil-evaluator');
		} else $data['gambar'] = null;

		if ($request->file('npwp')) {
			if ($request->oldNpwp) {
				Storage::delete($request->oldNpwp);
			}
			$data['npwp'] = $request->file('npwp')->store('profil-evaluator');
		} else $data['npwp'] = null;

		if ($request->file('ktp')) {
			if ($request->oldKtp) {
				Storage::delete($request->oldKtp);
			}
			$data['ktp'] = $request->file('ktp')->store('profil-evaluator');
		} else $data['ktp'] = null;

		if ($request->file('cv')) {
			if ($request->oldCv) {
				Storage::delete($request->oldCv);
			}
			$data['cv'] = $request->file('cv')->store('profil-evaluator');
		} else $data['cv'] = null;
		$dataEvaluator =  ([

			'nama_lengkap' => $request->nama_lengkap,
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
			'cv' => $data['cv'],
			'gambar' => $data['gambar'],
			'npwp' => $data['npwp'],
			'ktp' => $data['ktp']

		]);
		$this->evaluator->updateEvaluator($dataEvaluator, $id);
		return redirect()->route('profilevaluator.index')->with('sukses', 'Data profil berhasi diubah');
	}

	public function simpanRiwayatPendidikan(Request $request)
	{
		// TODO: menyimpan ke database
		if (!empty($request->id) && $request->id != null) {
			// TODO: fungsi edit data yang sudah ada
			$id = $request->id;
		} else {
			// TODO: fungsi tambah data baru
		}
	}

	public function simpanRiwayatPekerjaan(Request $request)
	{
		// TODO: menyimpan ke database
		if (!empty($request->id) && $request->id != null) {
			// TODO: fungsi edit data yang sudah ada
			$id = $request->id;
		} else {
			// TODO: fungsi tambah data baru
		}
	}

	public function simpanRiwayatPelatihan(Request $request)
	{
		// TODO: menyimpan ke database
		if (!empty($request->id) && $request->id != null) {
			// TODO: fungsi edit data yang sudah ada
			$id = $request->id;
		} else {
			// TODO: fungsi tambah data baru
		}
	}

	public function simpanRiwayatDE(Request $request)
	{
		// TODO: menyimpan ke database
		if (!empty($request->id) && $request->id != null) {
			// TODO: fungsi edit data yang sudah ada
			$id = $request->id;
		} else {
			// TODO: fungsi tambah data baru
		}
	}

	public function simpanRiwayatSE(Request $request)
	{
		// TODO: menyimpan ke database
		if (!empty($request->id) && $request->id != null) {
			// TODO: fungsi edit data yang sudah ada
			$id = $request->id;
		} else {
			// TODO: fungsi tambah data baru
		}
	}

	public function simpanSertifikat(Request $request)
	{
		// TODO: menyimpan ke database
	}

	public function simpanNPWP(Request $request)
	{
		// TODO: menyimpan ke database
	}

	public function simpanKTP(Request $request)
	{
		// TODO: menyimpan ke database
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
		$model = Evaluator::query();
		return DataTables::eloquent($model)
			->addColumn('action', function (Evaluator $evaluator) {
				return '<a href="evaluator/detailevaluator/' . $evaluator->user_id . '"><span class="badge badge-info">Info</span></a>';
			})
			->toJson();
	}


	// FUNCTION UNTUK ADMIN

	public function storeEvaluator(Request $request)
	{
		$validatedData = $request->validate([
			'nama_lengkap' => ['required'],
			'email' => ['required', 'email:dns'],
			'status' => ['required']
		]);
		$status = $validatedData['status'];
		$password = Str::random(12);
		$validatedData['password'] = bcrypt($password);
		$validatedData['peran'] = 'evaluator';
		$validatedData['status'] = false;
		$ret_val = User::create($validatedData);
		$id = $ret_val->id;
		Mail::to($validatedData['email'])->send(new KirimPassword($id, $password));
		$dataEvaluator = ([
			'user_id' => $id,
			'status' => $status,
			'nama_lengkap' => $validatedData['nama_lengkap']

		]);
		Evaluator::create($dataEvaluator);
		$request->session()->flash('sukses', 'Evaluator berhasil ditambahkan');
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
		return view('admin.evaluator.index', $data = [
			'menu' => 'Evaluator',
			'data' => $data,
			'peran' => auth()->user()->peran,
			'dataEvaluator' => $dataEvaluator
		]);
	}

	public function detailEvaluator($user_id)
	{
		$id = auth()->user()->id;
		$data = $this->user->getUser($id);
		$dataEvaluator = Evaluator::where('user_id', $user_id)->get()->first();
		$dataPendidikan = Pendidikan::where('user_id', $user_id)->get();
		$dataPekerjaan = Pekerjaan::where('user_id', $user_id)->get();
		$dataSertifikat = Sertifikat::where('user_id', $user_id)->get();
		return view('admin.evaluator.show', $data = [
			'peran' => auth()->user()->peran,
			'menu' => 'Evaluator',
			'data' => $data,
			'dataEvaluator' => $dataEvaluator,
			'dataPendidikan' => $dataPendidikan,
			'dataPekerjaan' => $dataPekerjaan,
			'dataSertifikat' => $dataSertifikat
		]);
	}

	public function verifikasiEvaluator($user_id)
	{
		Evaluator::where('user_id', $user_id)
			->update(['flag_complated' => 1]);
		return redirect()->route('showDataEvaluator')->with('sukses', 'Verifikasi berhasil');
	}
}
