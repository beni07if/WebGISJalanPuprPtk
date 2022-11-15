<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parentjalan;
use App\Models\Childjalan;

class ParentJalanController extends Controller
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
        $parentJalan = Parentjalan::all();
        $childJalan = Childjalan::all();
        return view('AdminPanel.kondisiJalan.parentJalan.index', compact('parentJalan', 'childJalan'));
        // return $parentJalan->nama_ruas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.kondisiJalan.parentJalan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jalan = new Parentjalan;
        $jalan->nomor_ruas = $request->nomor_ruas;
        $jalan->nama_ruas = $request->nama_ruas;
        $jalan->provinsi = $request->provinsi;
        $jalan->created_at = now();
        $jalan->updated_at = now();
        $jalan->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('parent-jalan')->with('success', 'Data Jalan Induk Berhasil Ditambahkan..', compact('jalan'));
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
        $parentJalan = Parentjalan::where('id', $id)->get();
        return view('AdminPanel.kondisiJalan.parentJalan.edit', compact('parentJalan'));
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
        $jalan = Parentjalan::findOrFail($id);
        $jalan->nomor_ruas = $request->input('nomor_ruas');
        $jalan->nama_ruas = $request->input('nama_ruas');
        $jalan->provinsi = $request->input('provinsi');
        $jalan->save($request->all());
        return redirect('parent-jalan')->with('success', 'Data Jalan Induk Berhasil Diubah..', compact('jalan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jalan = Parentjalan::findOrFail($id);
        $jalan->delete();
        return redirect('parent-jalan')->with('success', 'Data Jalan Induk Berhasil Dihapus..', compact('jalan'));
    }
}
