<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;

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
        
        $book = Peminjaman::with('buku')->paginate(10);
        
        return view ('peminjaman.index',['peminjaman'=>$peminjaman]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();

        $anggota = Anggota::all();

        return view('peminjaman.create',compact('buku','anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new Peminjaman;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->denda = $request->denda;
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        
        return view('peminjaman.show', ['peminjaman' => $peminjaman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        // $anggota = Anggota::all();

        return view('peminjaman.edit', compact('buku'));
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
        Peminjaman::find($id)->update([
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
        
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus!');
    }
}