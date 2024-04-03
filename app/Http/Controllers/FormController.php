<?php

namespace App\Http\Controllers;

use App\Models\ayah;
use App\Models\ibu;
use App\Models\anak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    // Store Data
    public function store(Request $request){
        DB::transaction(function () use($request) {
            // Masukan Data Ayah
            $ayah = ayah::create([
                'nama_ayah' => $request->NamaAyah,
                'tanggal_lahir_ayah' => $request->TanggalLahirAyah,
                'pekerjaan_ayah' => $request->PekerjaanAyah,
                'alamat_ayah' => $request->AlamatAyah,
                'RT_ayah' => $request->RTAyah,
                'RW_ayah' => $request->RWAyah,
            ]);

            //Masukkan Data Ibu
            $ibu = ibu::create([
                'nama_ibu'=>$request->NamaIbu,
                'tanggal_lahir_ibu'=>$request->TanggalLahirIbu,
                'pekerjaan_ibu'=>$request->PekerjaanIbu,
                'alamat_ibu'=>$request->AlamatIbu,
                'RT_ibu'=>$request->RTIbu,
                'RW_ibu'=>$request->RWIbu,
            ]);

            //Masukkan Data Anak
            $dataAnak = [];
            foreach($request->NamaAnak as $index => $anak){
                $dataAnak[] = [
                    'ayah_id' => $ayah->id,
                    'ibu_id' => $ibu->id,
                    'nama_anak'=> $request->NamaAnak[$index],
                    'tanggal_lahir_anak'=> $request->TanggalLahirAnak[$index],
                    'jenis_kelamin'=>$request->JenisKelaminAnak[$index],
                    'keterangan_anak'=>$request->StatusAnak[$index],
                ];
            }

            anak::insert($dataAnak);
        });

        return redirect('/');
    }
}
