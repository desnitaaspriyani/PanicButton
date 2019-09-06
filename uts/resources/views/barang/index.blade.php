@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang</div>
                    <div class="col-sm-12">
                        <a class="btn btn-xs btn-success" href="{!!url('brg/create')!!}">Tambah Data</a></br>
                    </div>
                    <table border="1">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Total Beli</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>

                    @foreach($brg as $item)

                    <tr>
                        <td>{!! $item->kd_barang !!}</td>
                        <td>{!! $item->nm_barang !!}</td>
                        <td>{!! $item->stok !!}</td>
                        <td>{!! $item->hrg_beli !!}</td>
                        <td>{!! $item->total_beli !!}</td>
                        <td>{!! $item->hrg_jual !!}</td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ url('brg/'.$item->id) }}">Show</a>
                            <a class="btn btn-xs btn-primary" href="{!! url('brg/'.$item->id.'/edit')!!}">
                              Edit
                            </a>
                            <form method="post" action="{{url('brg/'.$item->id)}}">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="submit" value="Hapus" class="btn btn-danger red darken-4 waves-effect waves-light white-text" onclick="return confirm('Apakah mau dihapus');">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
