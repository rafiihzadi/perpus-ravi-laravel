<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        
        return view ('peminjaman.index',['peminjaman'=>$peminjaman]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new Peminjam;
        $peminjam->id_buku = $request->id_buku;
        $peminjam->id_anggota = $request->id_anggota;
        $peminjam->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjam->tanggal_kembali = $request->tanggal_kembali;
        $peminjam->denda = $request->denda;
        $peminjam->status = $request->status;
        $peminjam->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjam = Peminjaman::findOrFail($id);
        
        return view('peminjaman.show', ['peminjam' => $peminjam]);
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
        Peminjam::find($id)->update([
            'nama buku' => $request->id_buku,
            'nama anggota' => $request->id_anggota,
            'tanggal pinjam' => $request->tanggal_pinjam,
            'tanggal kembali' => $request->tanggal_kembali,
            'denda' => $request->denda,
            'status' => $request->status,
        ]);
        

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diubah.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $peminjam = Peminjam::find($id);
        $peminjam->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjam berhasil dihapus!');
    }
}
