<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;

class DokumentasiController extends Controller
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
        $dokumentasi = Dokumentasi::all();
        return view('AdminPanel.Dokumentasi.Index', compact('dokumentasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Dokumentasi.CreateDokumentasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokumentasi = new Dokumentasi;
        $dokumentasi->nomor_ruas = $request->nomor_ruas;
        $dokumentasi->nama_ruas = $request->nama_ruas;
        $dokumentasi->kecamatan = $request->kecamatan;
        $dokumentasi->kelurahan = $request->kelurahan;
        // $dokumentasi->dokumentasi = $request->dokumentasi;
        $file       = $request->file('dokumentasi');
        $fileName   = $file->getClientOriginalName();
        $request->file('dokumentasi')->move("assets/img/dokumentasi/", $fileName);

        $dokumentasi->dokumentasi = $fileName;
        // $dokumentasi->password =  bcrypt($request->password);
        $dokumentasi->created_at = now();
        $dokumentasi->updated_at = now();
        $dokumentasi->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('dokumentasi')->with('success', 'Dokumentasi Berhasil Disimpan..', compact('dokumentasi'));
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
        $dokumentasi = Dokumentasi::where('id', $id)->get();
        return view('AdminPanel.Dokumentasi.EditDokumentasi', compact('dokumentasi'));
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
        $this->validate($request, [
            'dokumentasi' => 'required|file|mimes:pdf'
        ]);

        $dokumentasi = Dokumentasi::findOrFail($id);
        $dokumentasi->nomor_ruas = $request->input('nomor_ruas');
        $dokumentasi->nama_ruas = $request->input('nama_ruas');
        $dokumentasi->kecamatan = $request->input('kecamatan');
        $dokumentasi->kelurahan = $request->input('kelurahan');
        $file       = $request->file('dokumentasi');
        $fileName   = $file->getClientOriginalName();
        $request->file('dokumentasi')->move("assets/img/dokumentasi/", $fileName);
        $dokumentasi->dokumentasi = $fileName;
        $dokumentasi->save($request->all());
        return redirect('dokumentasi')->with('success', 'Dokumentasi Berhasil Diubah..', compact('dokumentasi'));
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
        $dokumentasi = Dokumentasi::findOrFail($id);
        $dokumentasi->delete();
        return redirect('dokumentasi')->with('success', 'Dokumentasi Berhasil Dihapus..', compact('dokumentasi'));
    }
}
