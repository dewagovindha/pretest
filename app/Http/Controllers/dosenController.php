<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = Dosen::get();
        return view('dosen.list', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosens = new Dosen;
        $dosens->nip = $request->nip;
        $dosens->nama = $request->nama;
        $dosens->alamat = $request->alamat;
        $dosens->tgl_lahir = $request->tgl_lahir;
        $dosens->jenis_kelamin = $request->jenis_kelamin;
        $dosens->save();

        return redirect('/dosen');
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
        $dosens = Dosen::find($id);
        return view('dosen.edit', compact('dosens'));
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
        $dosens = Dosen::find($id);
        $dosens->nip = $request->nip;
        $dosens->nama = $request->nama;
        $dosens->alamat = $request->alamat;
        $dosens->tgl_lahir = $request->tgl_lahir;
        $dosens->jenis_kelamin = $request->jenis_kelamin;
        $dosens->save();

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosens = Dosen::find($id);
        $dosens->delete();
        return redirect('/dosen');
    }
}
