<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests;

class Mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$mahasiswas = Mahasiswa::all();
        return view('templates.halamanawal', compact('mahasiswas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('templates.tambah');
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
		$mahasiswas = new Mahasiswa();
        $mahasiswas->nama = $request->nama;
        $mahasiswas->nim = $request->nim;
        $mahasiswas->alamat = $request->alamat;
        $mahasiswas->save();
        return redirect()->route('home.index');
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
		
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('templates.edit', compact('mahasiswas'));
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
		$mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->nama = $request->nama;
        $mahasiswas->nim = $request->nim;
        $mahasiswas->alamat = $request->alamat;
        $mahasiswas->save();
        return redirect()->route('home.index');
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
		
        $mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->delete();
        return redirect('/');
        //
    }
	
	
}
