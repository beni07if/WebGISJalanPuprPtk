<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalan;

class JalanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:mahasiswa');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJalan = Jalan::all();
        return view('AdminPanel.Jalan.Index', compact('dataJalan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Jalan.CreateJalan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jalan = new Jalan;
        $jalan->nomor_ruas = $request->nomor_ruas;
        $jalan->nama_ruas = $request->nama_ruas;
        $jalan->panjang = $request->panjang;
        $jalan->kecamatan = $request->kecamatan;
        $jalan->kelurahan = $request->kelurahan;
        $jalan->koordinat_pangkal = $request->koordinat_pangkal;
        $jalan->koordinat_ujung = $request->koordinat_ujung;
        $jalan->kondisi_baik = $request->kondisi_baik;
        $jalan->kondisi_sedang = $request->kondisi_sedang;
        $jalan->kondisi_rusak_ringan = $request->kondisi_rusak_ringan;
        $jalan->kondisi_rusak_berat = $request->kondisi_rusak_berat;
        $jalan->jp_aspal = $request->jp_aspal;
        $jalan->jp_beton = $request->jp_beton;
        $jalan->jp_kerikil = $request->jp_kerikil;
        $jalan->jp_tanah = $request->jp_tanah;
        // $jalan->password =  bcrypt($request->password);
        $jalan->created_at = now();
        $jalan->updated_at = now();
        $jalan->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('jalan')->with('success', 'Data Jalan Berhasil Ditambahkan..', compact('jalan'));
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
        $jalanDetail = Jalan::where('id', $id)->get();
        return view('AdminPanel.Jalan.EditJalan', compact('jalanDetail'));
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
        $jalan = Jalan::findOrFail($id);
        $jalan->nomor_ruas = $request->input('nomor_ruas');
        $jalan->nama_ruas = $request->input('nama_ruas');
        $jalan->kecamatan = $request->input('kecamatan');
        $jalan->kelurahan = $request->input('kelurahan');
        $jalan->panjang = $request->input('panjang');
        $jalan->koordinat_pangkal = $request->input('koordinat_pangkal');
        $jalan->koordinat_ujung = $request->input('koordinat_ujung');
        $jalan->kondisi_baik = $request->input('kondisi_baik');
        $jalan->kondisi_sedang = $request->input('kondisi_sedang');
        $jalan->kondisi_rusak_ringan = $request->input('kondisi_rusak_ringan');
        $jalan->kondisi_rusak_berat = $request->input('kondisi_rusak_berat');
        $jalan->jp_aspal = $request->input('jp_aspal');
        $jalan->jp_beton = $request->input('jp_beton');
        $jalan->jp_kerikil = $request->input('jp_kerikil');
        $jalan->jp_tanah = $request->input('jp_tanah');
        $jalan->save($request->all());
        return redirect('jalan')->with('success', 'Data Jalan Berhasil Diubah..', compact('jalan'));
        // return back()->with('message', 'Mahasiswa berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jalan = Jalan::findOrFail($id);
        $jalan->delete();
        return redirect('jalan')->with('success', 'Data Jalan Berhasil Dihapus..', compact('jalan'));
    }
}
