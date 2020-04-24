<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujian;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $ujian = Ujian::all();
       return view('index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasiData = $request->validate([
            'nama_mk'=>'required|max:50',
            'dosen'=>'required|max:50',
            'jumlah_soal'=>'required|numeric',
            'keterangan'=>'required|max:255',
        ]);
        $ujian = Ujian::create($validasiData);
        return redirect('/ujian')->with('sukses', 'berhasil disimpan');
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
        //
        $ujian = Ujian::findOrFail($id);

        return view ('edit', compact('ujian'));
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
        //
        $validasiData = $request->validate([
            'nama_mk'=>'required|max:50',
            'dosen'=>'required|max:50',
            'jumlah_soal'=>'required|numeric',
            'keterangan'=>'required|max:255',
        ]);
        Ujian::whereId($id)->update($validasiData);
        return redirect('/ujian')->with('sukses', 'berhasil disimpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ujian = Ujian::findOrFail($id);
        $ujian->delete();
        return redirect('/ujian')->with('sukses', 'Di hapus');
    }
}
