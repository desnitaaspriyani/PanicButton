@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <strong>Id Pelanggan : </strong>
          {{$plg->id_plg}}
        </div>
        <div class="card-body">
          <strong>Nama Pelanggan : </strong>
          {{$plg->nm_plg}}
        </div>
        <div class="card-body">
          <strong>Alamat : </strong>
          {{$plg->alamat}}
        </div>
        <div class="card-body">
          <strong>No. Telpon : </strong>
          {{$plg->no_telp}}
        </div>
          <div class="form-group row">
            <div class="col-md-2">
              <a href="{{route('plg.index')}}" class="btn btn-secondary">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
