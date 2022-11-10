<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalan;
use App\Models\Dokumentasi;
use App\Models\Peta;

class WebGISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataJalan = Jalan::all();
        return view('WebGIS.index');
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

    public function blog()
    {
        return view('WebGIS.blog');
    }
    public function peta()
    {
        return view('WebGIS.peta');
    }

    public function petaJs()
    {
        return view('WebGIS.petaJs');
    }

    public function peta2()
    {
        return view('WebGIS.peta2');
    }

    public function pupr()
    {
        return view('WebGIS.pupr');
    }

    public function peta3()
    {
        return view('WebGIS.peta3');
    }
    public function data()
    {
        // $dataJalan = Jalan::all()->get()->getResultArray();
        $dataJalan = Jalan::all();
        $tes1 = 254.119;
        $tes2 = 31.959;
        $tes3 = 500;
        return view('WebGIS.data', compact('dataJalan', 'tes1', 'tes2', 'tes3'));
    }
    public function SkPs()
    {
        return view('WebGIS.skps');
    }
    public function galery()
    {
        $dokumentasi = Dokumentasi::all();
        return view('WebGIS.galery', compact('dokumentasi'));
    }
    public function download()
    {
        $peta = Peta::all();
        return view('WebGIS.download', compact('peta'));
    }
    public function contact()
    {
        return view('WebGIS.contact');
    }
    public function datatable()
    {
        return view('WebGIS.datatable');
    }
    public function chart()
    {

        $dataJalan = Jalan::all();
        return view('WebGIS.chart', compact('dataJalan'));
    }
    public function jalanDetail($id)
    {
        $jalanDetail = Jalan::where('id', $id)->get();
        $aspal = Jalan::where('id', $id)->get();
        $beton = Jalan::where('id', $id)->get();
        $kerikil = Jalan::where('id', $id)->get();
        $tanah = Jalan::where('id', $id)->get();

        // $aspal = 10;
        // $beton = 20;
        // $kerikil = 30;
        // $tanah = 40;
        // $baik = $jalanDetail->kondisi_baik;
        $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        return view('WebGIS.jalanDetail', compact('jalanDetail', 'aspal', 'beton', 'kerikil', 'tanah', 'baik'));
        // dd($baik);
    }

    // admin
    public function jalanKeseluruhan()
    {
        return view('AdminPanel.jalanKeseluruhan');
    }
    // end admin

    public function coba()
    {
        $tes = 300;
        return view('AdminPanel.coba', compact('tes'));
    }
}
