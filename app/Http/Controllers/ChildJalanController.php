<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childjalan;
use App\Models\Parentjalan;

class ChildJalanController extends Controller
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
        $childJalan = Childjalan::all();
        $parentJalan = Parentjalan::all();
        return view('AdminPanel.kondisiJalan.childJalan.index', compact('childJalan', 'parentJalan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentJalan = Parentjalan::all();
        return view('AdminPanel.kondisiJalan.childJalan.create', compact('parentJalan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jalan = new Childjalan;
        $jalan->parentjalan_id = $request->parentjalan_id;
        $jalan->patok_dari = $request->patok_dari;
        $jalan->patok_ke = $request->patok_ke;
        $jalan->panjang = $request->panjang;
        $jalan->lebar = $request->lebar;
        $jalan->kondisi_jalan = $request->kondisi_jalan;
        $jalan->created_at = now();
        $jalan->updated_at = now();
        $jalan->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('child-jalan')->with('success', 'Data Anak Jalan Berhasil Ditambahkan..', compact('jalan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parentJalan = Parentjalan::where('id', $id)->get();
        $childJalan = Childjalan::where('parentjalan_id', $id)->get();
        return view('AdminPanel.kondisiJalan.childJalan.show', compact('parentJalan', 'childJalan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parentJalan = Parentjalan::all();
        $childJalan = Childjalan::where('id', $id)->get();
        return view('AdminPanel.kondisiJalan.childJalan.edit', compact('parentJalan', 'childJalan'));
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
        $jalan = Childjalan::findOrFail($id);
        $jalan->parentjalan_id = $request->input('parentjalan_id');
        $jalan->patok_dari = $request->input('patok_dari');
        $jalan->patok_ke = $request->input('patok_ke');
        $jalan->panjang = $request->input('panjang');
        $jalan->lebar = $request->input('lebar');
        $jalan->kondisi_jalan = $request->input('kondisi_jalan');
        $jalan->save($request->all());
        return redirect('child-jalan')->with('success', 'Data Kondisi Jalan Berhasil Diubah..', compact('jalan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jalan = Childjalan::findOrFail($id);
        $jalan->delete();
        return redirect('child-jalan')->with('success', 'Data Kondisi Jalan Berhasil Dihapus..', compact('jalan'));
    }
}
