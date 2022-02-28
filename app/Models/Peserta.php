<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peserta extends Model
{
	use HasFactory;
	protected $primaryKey = 'user_id';
	protected $table = "peserta";

	protected $guarded = [''];

	public function user()
	{
		return $this->hasOne(Peserta::class);
	}
	public function masterSektorKategori()
	{
		return $this->hasMany(Peserta::class);
	}

	public function masterKotaKabupaten()
	{
		return $this->hasMany(Peserta::class);
	}
	public function masterSni()
	{
		return $this->hasMany(Peserta::class);
	}

	public function getPesertaWithUserId($user_id)
	{
		return DB::table('peserta')->where('user_id', $user_id)->get()->first();;
	}

	public function daftarDokumen()
	{
		return $this->hasMany(DokumenPeserta::class, 'user_id', 'user_id');
	}
}
