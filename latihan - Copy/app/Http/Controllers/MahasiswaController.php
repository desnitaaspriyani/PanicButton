<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs=Mahasiswa::all();
        return view ('mahasiswa.index',compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mahasiswa.create');
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
      Mahasiswa::create($input);
      return redirect(url('mhs'));
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
        $mhs=Mahasiswa::find($id);
        if(empty($mhs)){
          return "Error data tidak ditemukan";
        }
        return view('mahasiswa.edit',compact('mhs'));
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
      $mhs=Mahasiswa::find($id);
      $input=$request->all();
      if(empty($mhs)){
        return "Error data tidak ditemukan";
      }
      //return $input;
      $mhs->update($input);
      return redirect(url('mhs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mhs=Mahasiswa::find($id);
      //$input=$request->all();
      if(empty($mhs)){
        return "Error data tidak ditemukan";
      }
      $mhs->delete();
      return redirect(url('mhs'));
    }
}
