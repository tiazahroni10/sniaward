<?php

namespace App\Http\Controllers;

use App\Models\MasterProvinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterKotaKabupatenController extends Controller
{
    public function getKabupaten(Request $request)
    {
        $id = $request->id;
        $dataKabupaten = MasterProvinsi::where('id',$id)->get()->first();
        $region_id = $dataKabupaten->region_id;
        $subs = Str::substr($region_id, 0, 2);
        $kabupaten = DB::table('master_kota_kabupaten')
                ->where('region_id', 'like', $subs.'%')
                ->get();
        foreach($kabupaten as $kab){
            echo "<option value='$kab->id'>$kab->nama</option>";
        }
    }
    // public function getKabupatenn(Request $request)
    // {
    //     $region_id = 11000000;
    //     $subs = Str::substr($region_id, 0, 2);
    //     $kabupaten = DB::table('master_kota_kabupaten')
    //             ->where('region_id', 'like', $subs.'%')
    //             ->get();
    //     foreach($kabupaten as $kab){
    //         echo "<option value='$kab->id'>$kab->nama</option>";
    //     }
    // }

}
