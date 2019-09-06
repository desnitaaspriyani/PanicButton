<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $brg=Barang::all();
        return view ('barang.index',compact('brg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('barang.create');
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
        Barang::create($input);
        return redirect(url('brg'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brg = Barang::find($id);
        return view('barang.show', compact('brg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brg=Barang::find($id);
        if(empty($brg)){
            return "Error Data Tidak Ditemukan";
        }
        return view('barang.edit',compact('brg'));
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
        $brg=Barang::find($id);
        $input=$request->all();
        if(empty($brg)){
            return "Error Data Tidak Ditemukan";
        }
        $brg->update($input);
        return redirect(url('brg'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg=Barang::find($id);
        //$input=$request->all();
        if(empty($brg)){
            return "Error data tidak ditemukan";
        }
        $brg->delete();
        return redirect(url('brg'));
    }
}
