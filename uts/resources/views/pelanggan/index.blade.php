@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pelanggan</div>
                    <div class="col-sm-12">
                        <a class="btn btn-xs btn-success" href="{!!url('plg/create')!!}">Tambah Data</a></br>
                    </div>
                    <table border="1">
                        <tr>
                            <th>Id Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No. Telpon</th>
                            <th>Aksi</th>
                        </tr>

                    @foreach($plg as $item)

                    <tr>
                        <td>{!! $item->id_plg !!}</td>
                        <td>{!! $item->nm_plg !!}</td>
                        <td>{!! $item->alamat !!}</td>
                        <td>{!! $item->no_telp !!}</td>
                        <td>
                            <a class="btn btn-xs btn-info" href="{{ url('plg/'.$item->id) }}">Show</a>
                            <a class="btn btn-xs btn-primary" href="{!! url('plg/'.$item->id.'/edit')!!}">
                              Edit
                            </a>
                            <form method="post" action="{{url('plg/'.$item->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Hapus" class="btn btn-danger red darken-4 waves-effect waves-light white-text" onclick="return confirm('Apakah mau dihapus');">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
