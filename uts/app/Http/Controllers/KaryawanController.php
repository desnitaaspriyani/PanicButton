<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kry=Karyawan::all();
        return view ('karyawan.index',compact('kry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Karyawan::create($input);
        return redirect(url('kry'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kry = Karyawan::find($id);
        return view('karyawan.show', compact('kry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $kry=Karyawan::find($id);
       if(empty($kry)){
        return "Error Data Tidak Ditemukan";
       }
       return view('karyawan.edit',compact('kry'));
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
        $kry=Karyawan::find($id);
        $input=$request->all();
        if(empty($kry)){
            return "Error Data Tidak Ditemukan";
        }
        $kry->update($input);
        return redirect(url('kry'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kry=Karyawan::find($id);
        //$input=$request->all();
        if(empty($kry)){
            return "Error data tidak ditemukan";
        }
        $kry->delete();
        return redirect(url('kry'));
    }
}
