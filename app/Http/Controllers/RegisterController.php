<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar');
        
    }
    
    public function simpanData(Request $request)
    {
        //validat data yang masuk
        $validatedData = $request -> validate([
            'nama_organisasi' => ['required','max:50','unique:peserta'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:3']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); //enkripsi password
         $ret_val =  User::create($validatedData); //input data ke tabel users
        $id = $ret_val->id; // mengambil id terakhir yang ada pada tabel user
        $dataPeserta = ([
            'user_id'=> $id,
            'nama_organisasi' => $validatedData['nama_organisasi']
        ]);

        Peserta::create($dataPeserta); //input data ke tabel peserta
        $request->session()->flash('sukses','Registrasi berhasil, login sekarang');

        
        // return redirect('/login')->with('sukses','Registrasi berhasil, login sekarang'); 
        // return redirect('/login'); 
        // return redirect('/pertanyaan'); 
        return redirect()->route('showPertanyaan')->with('userid', $id);
    }
}