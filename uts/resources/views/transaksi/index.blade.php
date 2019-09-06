@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Transaksi</div>
					<div class="col-sm-12">
						<a class="btn btn-xs btn-success" href="{{ route('trans.create') }}">Tambah Data</a></br>
					</div>
					<table border="1">
						<tr>
							<th>Id Transaksi</th>
							<th>Nama Karyawan</th>
							<th>Nama Pelanggan</th>
							<th>Kode Barang</th>
							<th>Tanggal Transaki</th>
							<th>Jumlah Barang</th>
							<th>Harga Satuan</th>
							<th>Total</th>
							<th>Aksi</th>
						</tr>

						@foreach($trans as $item)

						<tr>
							<td>{!!$item->id_trans!!}</td>
							<td>{!!$item->karyawan->nm_kry!!}</td>
							<td>{!!$item->pelanggan->nm_plg!!}</td>
							<td>{!!$item->barang->nm_barang!!}</td>
							<td>{!!$item->tgl_trans!!}</td>
							<td>{!!$item->jmlh_barang!!}</td>
							<td>{!!$item->hrg_jual!!}</td>
							<td>{!!$item->total_harga!!}</td>
							<td>
								<a class="btn btn-xs btn-info" href="{{ url('trans/'.$item->id) }}">Show</a>
								<a class="btn btn-xs btn-primary" href="{!!url('trans/'.$item->id.'/edit')!!}">
									Edit
								</a>
								<form method="post" action="{{url('trans/'.$item->id)}}">
									@csrf
									<input type="hidden" name="_method" value="DELETE">
									<input type="submit" name="hapus" value="Hapus" class="btn btn-danger red darken-4 waves-effect waves-light white-text" onclick="return confirm('Apakah mau dihapus');">
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