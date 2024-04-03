<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IbuController extends Controller
{
    // Function Index Untuk Nampilkan Data
    public function index(){
        $ibus = ibu::all();
        return view('/Ibu/ibu', compact('ibus'));
    }

    // Function Update Ibu Untuk Melakukan Update
    public function updateIbu($id){
        $ibus = ibu::findOrFail($id);
        return view('/Ibu/updateIbu', compact('ibus'));
    }

    // Function Update Untuk Menyimoan Data Ibu Sudah diUpate
    public function update(Request $request, $id){
        $ibus = ibu::find($id);
        $request->validate([
            'nama_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu'=> 'required',
            'RT_ibu'=>'required',
            'RW_ibu'=>'required',
        ]);

        $ibus->update([
            'nama_ibu' => $request->nama_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat_ibu' => $request->alamat_ibu,
            'RT_ibu' => $request->RT_ibu,
            'RW_ibu' => $request->RW_ibu,
        ]);
        return redirect('./Ibu/ibu');
    }

    // Function Destroy Untuk Delete Data Ibu
    public function destroy($id){
        $ibus = ibu::find($id);
        $ibus->delete();

        return back();
    }
}
