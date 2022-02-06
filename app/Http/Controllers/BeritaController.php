<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use League\CommonMark\Normalizer\SlugNormalizer;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
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
        $dataBerita = Berita::all();
        $data = $this->user->getUser($id);
        return view('admin/berita/index',$data = [
            'menu' => 'Berita',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'dataBerita' => $dataBerita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        return view('admin.berita.create',$data = [
            'menu' => 'Berita',
            'data' => $data,
            'peran' => auth()->user()->peran
        ]);
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
            'judul' => ['required','unique:berita'],
            'konten' => ['required'],
            'gambar' => 'required|file|mimes:jpg,png,jpeg|max:2048'
        ]);
        $validatedData['slug'] = Str::slug($request->judul,'-');
        $validatedData['slug'] = Str::lower($validatedData['slug']);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['rilis'] = now();
        $validatedData['gambar'] =$request->file('gambar')->store('dokumentasi-berita');

        Berita::create($validatedData);
        $request->session()->flash('sukses','Berita berhasil ditambahkan');
        return redirect()->route('berita.index');
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

    public function dataTables()
    {
        return DataTables() ::of(Berita::query())
        ->addColumn('action',function($model){
            return '<a href="#">Edit</a> <a href="##">Hapus</a>';
        })
        ->make(true); 
    }
}
