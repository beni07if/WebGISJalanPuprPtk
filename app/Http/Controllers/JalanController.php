<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalan;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validasi = $request->validate([
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
        $jalan = Jalan::create($validasi);
        // return redirect('jalanKota');
        return redirect('jalanKota')->with('success', 'Data Jalan Berhasil Upload..', compact('jalan'));
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
}
