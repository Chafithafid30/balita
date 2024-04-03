<?php

namespace App\Http\Controllers;

use App\Models\anak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnakController extends Controller
{
    // Function Index Untuk Nampilkan Data Anak
    public function index(){
        $anaks = anak::all();
        return view('/Anak/anak', compact('anaks'));
    }

    // Function Update Anak Untuk Melakukan Update Di Halaman Anak
    public function updateAnak($id){
        $anaks = anak::findOrFail($id);
        return view('/Anak/updateAnak', compact('anaks'));
    }

    // Functon update Anak untuk menyimpan data sudah diupdate
    public function update(Request $request, $id){
        $anaks = anak::find($id);
        $request->validate([
            'nama_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah'=> 'required',
            'RT_ayah'=>'required',
            'RW_ayah'=>'required',
        ]);

        $anaks->update([
            'nama_ayah' => $request->nama_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'alamat_ayah' => $request->alamat_ayah,
            'RT_ayah' => $request->RT_ayah,
            'RW_ayah' => $request->RW_ayah,
        ]);
        return redirect('./anak');
    }

    //Function Destroy Untuk Delete Data Anak
    public function destroy($id){
        $anaks = anak::find($id);
        $anaks->delete();

        return back();
    }
}