<?php

namespace App\Http\Controllers;

use App\Models\ayah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AyahController extends Controller
{

    // Function Index Untuk Nampilkan Data
    public function index(){
        $ayahs = ayah::all();
        return view('/Ayah/ayah', compact('ayahs'));
    }

    // Function Update Ayah Untuk Melakukan Update Di Halaman Ayah'
    public function updateAyah($id){
        $ayahs = ayah::findOrFail($id);
        return view('/Ayah/updateAyah', compact('ayahs'));
    }

    // Functon update Ayah untuk menyimpan data sudah diupdate
    public function update(Request $request, $id){
        $ayahs = ayah::find($id);
        $request->validate([
            'nama_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah'=> 'required',
            'RT_ayah'=>'required',
            'RW_ayah'=>'required',
        ]);

        $ayahs->update([
            'nama_ayah' => $request->nama_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'alamat_ayah' => $request->alamat_ayah,
            'RT_ayah' => $request->RT_ayah,
            'RW_ayah' => $request->RW_ayah,
        ]);
        return redirect('./Ayah/ayah');
    }

    //Function Destroy Untuk Delete Data Ayah
    public function destroy($id){
        $ayahs = ayah::find($id);
        $ayahs->delete();

        return back();
    }
}