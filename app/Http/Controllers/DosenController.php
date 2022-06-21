<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function dosen()
    {
        $dosen = Dosen::paginate(5);
        return view('dosen', ['dosen' => $dosen]);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $dosen = Dosen::where('nidn', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate(10);
        return view('dosen', ['dosen'=>$dosen], ['cek'=>'dosen']);
    }

    public function formulirdosen()
    {
        return view('formulirdosen');
    }

    public function simpandosen(Request $request)
    {
        $pakar = implode(",", $request->get('pakar'));
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $pakar
        ]);
        return redirect("/dosen")->with('alert', 'Berhasil disimpan');
    }

    public function editdosen($id)
    {
        $dosen = Dosen::find($id);
        return view('editdosen', ['dosen' => $dosen]);
    }

    public function updatedosen($id, Request $request)
    {
        $pakar = implode(',',$request->pakar);
        $dosen = Dosen::find($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = $pakar;
        $dosen->save();
        return redirect('/dosen')->with('alert', 'Berhasil diubah');
    }

    public function hapusdosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('alert', 'Berhasil dihapus');
    }
}
