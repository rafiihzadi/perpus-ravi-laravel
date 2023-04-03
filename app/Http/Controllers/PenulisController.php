<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::all();

        return view('penulis.index',['penulis'=>$penulis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $penulis = new Penulis;
        
        $penulis->nama = $request->nama;
        $penulis->alamat = $request->alamat;
        $penulis->telepon = $request->telepon;
        $penulis->email = $request->email;
        $penulis->save();

        
        return redirect()->route('penulis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        
        return view('penulis.show', ['penulis' => $penulis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $penulis = Penulis::find($id);
        return view('penulis.edit', compact('penulis'));
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
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);

        $penulis = Penulis::find($id);
        $penulis->nama = $request->input('nama');
        $penulis->alamat = $request->input('alamat');
        $penulis->telepon = $request->input('telepon');
        $penulis->email = $request->input('email');

        return redirect()->route('penulis.index')->with('success', 'User updated successfully.');
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
