<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalan;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller
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
        return view('NiceAdmin.Content.Dashboard');
    }
    public function index2()
    {
        return view('AdminPanel.Dashboard2');
    }
    public function jalanKota()
    {
        $dataJalan = Jalan::all();
        return view('AdminPanel.Jalan', compact('dataJalan'));
    }
    public function tambahJalan()
    {
        return view('AdminPanel.TambahJalan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function editJalan($id)
    {
        $jalanDetail = Jalan::where('id', $id)->get();
        return view('AdminPanel.editJalan', compact('jalanDetail'));
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

    public function updateJalan(Request $request, $id)
    {
        $validasi = $request->validate([
            // 'user_id' => 'required',
            // 'keluarga' => 'required',
            'nomor_ruas' => 'required',
            'nama_ruas' => 'required',
            'panjang' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'koordinat_pangkal' => 'required',
            'koordinat_ujung' => 'required',

            'kondisi_baik' => 'required',
            'kondisi_sedang' => 'required',
            'kondisi_rusak_ringan' => 'required',
            'kondisi_rusak_berat' => 'required',

            'jp_aspal' => 'required',
            'jp_beton' => 'required',
            'jp_kerikil' => 'required',
            'jp_tanah' => 'required'
        ]);

        Jalan::whereId($id)->update($validasi);
        return redirect('jalan-kota-pontianak')->with('success', 'Data Berhasil Diubah..');
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
}
