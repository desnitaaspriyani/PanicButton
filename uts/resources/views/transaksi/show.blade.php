@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <strong>Id Transaksi : </strong>
          {{$trans->id_trans}}
        </div>
        <div class="card-body">
          <strong>Nama Karyawan : </strong>
          {{$trans->karyawan->nm_kry}}
        </div>
        <div class="card-body">
          <strong>Nama Pelanggan : </strong>
          {{$trans->pelanggan->nm_plg}}
        </div>
        <div class="card-body">
          <strong>Kode Barang : </strong>
          {{$trans->barang->nm_barang}}
        </div>
        <div class="card-body">
          <strong>Tanggal Transaksi : </strong>
          {{$trans->tgl_trans}}
        </div>
        <div class="card-body">
          <strong>Jumlah Barang : </strong>
          {{$trans->jmlh_barang}}
        </div>
        <div class="card-body">
          <strong>Harga Satuan : </strong>
          {{$trans->hrg_jual}}
        </div>
        <div class="card-body">
          <strong>Total : </strong>
          {{$trans->total_harga}}
        </div>
          <div class="form-group row">
            <div class="col-md-2">
              <a href="{{route('trans.index')}}" class="btn btn-secondary">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
