@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Karyawan</div>
					<div class="col-sm-12">
						<a class="btn btn-xs btn-success" href="{{ route('kry.create') }}">Tambah Data</a></br>
					</div>
					<table border="1">
						<tr>
							<th>Id Karyawan</th>
							<th>Nama Karyawan</th>
							<th>Alamat</th>
							<th>No. Telpon</th>
							<th>Aksi</th>
						</tr>

						@foreach($kry as $item)

						<tr>
							<td>{!!$item->id_kry!!}</td>
							<td>{!!$item->nm_kry!!}</td>
							<td>{!!$item->alamat!!}</td>
							<td>{!!$item->no_telp!!}</td>
							<td>
								<a class="btn btn-xs btn-info" href="{{ url('kry/'.$item->id) }}">Show</a>
								<a class="btn btn-xs btn-primary" href="{!!url('kry/'.$item->id.'/edit')!!}">
									Edit
								</a>
								<form method="post" action="{{url('kry/'.$item->id)}}">
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