<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Barang;
use App\Karyawan;
use App\Pelanggan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans=Transaksi::all();
        return view ('transaksi.index',compact('trans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::pluck('nm_kry', 'id');
        $barangs = Barang::pluck('nm_barang', 'id');
        $pelanggans = Pelanggan::pluck('nm_plg', 'id');
        return view ('transaksi.create',compact('karyawans','barangs','pelanggans'));
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
        Transaksi::create($input);
        return redirect(url('trans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trans = Transaksi::find($id);
        return view('transaksi.show', compact('trans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawans = Karyawan::pluck('nm_kry', 'id');
        $barangs = Barang::pluck('nm_barang', 'id');
        $pelanggans = Pelanggan::pluck('nm_plg', 'id');
        $trans=Transaksi::find($id);
        if(empty($trans)){
            return "Error Data Tidak Ditemukan";
        }
        return view('transaksi.edit',compact('trans','karyawans','barangs','pelanggans'));
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
        $trans=Transaksi::find($id);
        $input=$request->all();
        if(empty($trans)){
            return "Error Data Tidak Ditemukan";
        }
        $trans->update($input);
        return redirect(url('trans'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trans=Transaksi::find($id);
        //$input=$request->all();
        if(empty($trans)){
            return "Error data tidak ditemukan";
        }
        $trans->delete();
        return redirect(url('trans'));
    }
}
