<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();

        return view('buku.index',['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $buku = new Buku;
        $buku->nama = $request->nama;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->id_penulis = $request->id_penulis;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->id_kategori = $request->id_kategori;
        $buku->sinopsis = $request->sinopsis;
        $buku->sampul = $request->sampul;
        $buku->save();
        
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $buku = Buku::findOrFail($id);
        return view('buku.show', ['buku' => $buku]);
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
        return view('buku.edit', compact('buku'));
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
        $request->validate([
            'nama' => 'required',
            'tahun_terbit' => 'required',
            'id_penulis' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'sampul' => 'required',
        ]);

        $buku = Buku::find($id);
        $buku->nama = $request->input('nama');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->id_penulis = $request->input('id_penulis');
        $buku->id_penerbit = $request->input('id_penerbit');
        $buku->id_kategori = $request->input('id_kategori');
        $buku->id_sinopsis = $request->input('id_sinopsis');
        $buku->sampul = $request->input('sampul');

        


        return redirect()->route('buku.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::find($id);
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil dihapus!');
    }
}