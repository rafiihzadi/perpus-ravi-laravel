<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\Kategori;
use PDF;

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

        $book = Buku::with('penulis', 'penerbit', 'kategori')->paginate(10);

        return view ('buku.index',['buku'=>$buku]);

        return view('buku.index',['buku'=>$buku]);


        $book = Buku::with('penulis', 'penerbit', 'kategori')->paginate(10);

        return view ('buku.index',['buku'=>$buku]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = Penulis::all();

        $penerbit = Penerbit::all();

        $kategori = Kategori::all();

        return view('buku.create', compact('penulis', 'penerbit', 'kategori'));
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
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();

        return view('buku.edit', compact('penulis', 'buku', 'penerbit', 'kategori'));
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
        Buku::find($id)->update([
            'nama' => $request->nama,
            'tahun_terbit' => $request->tahun_terbit,
            'id_penulis' => $request->id_penulis,
            'id_penerbit' => $request->id_penerbit,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'sampul' => $request->sampul,
        ]);

        
    return redirect()->route('buku.index')->with('success', 'Data berhasil dubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }

    public function pdf()
    {
        $buku = Buku::get();
 
        $pdf = PDF::loadview('buku.buku-pdf',['buku'=>$buku]);

        return $pdf->stream();
    }

}