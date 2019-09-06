@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <strong>Id Karyawan : </strong>
          {{$kry->id_kry}}
        </div>
        <div class="card-body">
          <strong>Nama Karyawan : </strong>
          {{$kry->nm_kry}}
        </div>
        <div class="card-body">
          <strong>Alamat : </strong>
          {{$kry->alamat}}
        </div>
        <div class="card-body">
          <strong>No. Telpon : </strong>
          {{$kry->no_telp}}
        </div>
          <div class="form-group row">
            <div class="col-md-2">
              <a href="{{route('kry.index')}}" class="btn btn-secondary">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
