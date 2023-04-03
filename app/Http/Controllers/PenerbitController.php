<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();

        return view('penerbit.index',['penerbit'=>$penerbit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $penerbit = new Penerbit;
        $penerbit->nama = $request->nama;
        $penerbit->alamat = $request->alamat;
        $penerbit->telepon = $request->telepon;
        $penerbit->email = $request->email;
        $penerbit->save();

        
        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        
        return view('penerbit.show', ['penerbit' => $penerbit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $penerbit = Penerbit::find($id);
        return view('penerbit.edit', compact('penerbit'));
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
        
        $penerbit = Penerbit::find($id);
        $penerbit->nama = $request->input('nama');
        $penerbit->alamat = $request->input('alamat');
        $penerbit->telepon = $request->input('telepon');
        $penerbit->email = $request->input('email');

        return redirect()->route('penerbit.index')->with('success', 'User updated successfully.');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit->delete();

        return redirect()->route('penerbit.index')->with('success','Penerbit berhasil dihapus');
    }
}
