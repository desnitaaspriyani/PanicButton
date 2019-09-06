@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Karyawan</div>
				
					@csrf
					<table >
						<tr>
							<td>Id Karyawan</td>
							<td>:</td>
							<td><input type="text" name="id_kry" value="{!! isset($kry)?$kry->id_kry:"" !!}"></td>
						</tr>
						<tr>
							<td>Nama Karyawan</td>
							<td>:</td>
							<td><input type="text" name="nm_kry" value="{!! isset($kry)?$kry->nm_kry:"" !!}"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" value="{!! isset($kry)?$kry->alamat:"" !!}"></td>
						</tr>
						<tr>
							<td>No. Telpon</td>
							<td>:</td>
							<td><input type="text" name="no_telp" value="{!! isset($kry)?$kry->no_telp:"" !!}"></td>
						</tr>
						<tr>
							<td><input type="submit" name="Simpan Data"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

