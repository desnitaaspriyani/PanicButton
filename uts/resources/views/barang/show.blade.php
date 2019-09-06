@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <strong>Kode Barang : </strong>
          {{$brg->kd_barang}}
        </div>
        <div class="card-body">
          <strong>Nama Barang : </strong>
          {{$brg->nm_barang}}
        </div>
        <div class="card-body">
          <strong>Stok : </strong>
          {{$brg->stok}}
        </div>
        <div class="card-body">
          <strong>Harga Beli : </strong>
          {{$brg->hrg_beli}}
        </div>
        <div class="card-body">
          <strong>Total Beli : </strong>
          {{$brg->total_beli}}
        </div>
        <div class="card-body">
          <strong>Harga Jual : </strong>
          {{$brg->hrg_jual}}
        </div>
          <div class="form-group row">
            <div class="col-md-2">
              <a href="{{route('brg.index')}}" class="btn btn-secondary">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
