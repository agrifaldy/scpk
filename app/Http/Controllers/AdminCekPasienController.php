<?php

namespace App\Http\Controllers;

use App\CekPasienRiwayatPenyakit;
use App\HomestayDetail;
use App\Pasien;
use App\Penyakit;
use App\User;
use Illuminate\Http\Request;

class AdminCekPasienController extends Controller
{
    //
    public function index()
    {
        //
        $pasiens = Pasien::all();
        return view('dashboard.cekpasien.index', compact('pasiens'));

    }

    public function edit($id)
    {
        //
        $pasien = Pasien::findOrFail($id);
        $penyakits = Penyakit::all();
        return view('dashboard.cekpasien.create', compact('pasien', 'penyakits'));
    }

    public function update(Request $request, $id)
    {

        if ($request->penyakit_id){
            foreach ($request->penyakit_id as $penyakit) {
                CekPasienRiwayatPenyakit::create(['cek_pasien_id' => $id, 'pasien_id' => $request->pasien_id, 'penyakit_id' => $penyakit ]);
            }
        }
        dd($request);
        $input = $request -> all();
        Penyakit::create($input);
        return redirect()->route('dashboard.cekpasien.index')->withSuccess('saved');
    }
}
