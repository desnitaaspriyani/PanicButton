<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plg=Pelanggan::all();
        return view ('pelanggan.index',compact('plg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pelanggan.create');
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
        Pelanggan::create($input);
        return redirect(url('plg'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plg = Pelanggan::find($id);
        return view('pelanggan.show', compact('plg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plg=Pelanggan::find($id);
        if(empty($plg)){
            return "Error Data Tidak Ditemukan";
        }
        return view('pelanggan.edit',compact('plg'));
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
        $plg=Pelanggan::find($id);
        $input=$request->all();
        if(empty($plg)){
            return "Error Data Tidak Ditemukan";
        }
        $plg->update($input);
        return redirect(url('plg'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plg=Pelanggan::find($id);
        //$input=$request->all();
        if(empty($plg)){
            return "Error data tidak ditemukan";
        }
        $plg->delete();
        return redirect(url('plg'));
    }
}
