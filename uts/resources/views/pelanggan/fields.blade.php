@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Pelanggan</div>
				
					@csrf
					<table >
						<tr>
							<td>Id Pelanggan</td>
							<td>:</td>
							<td><input type="text" name="id_plg" value="{!! isset($plg)?$plg->id_plg:"" !!}"></td>
						</tr>
						<tr>
							<td>Nama Pelanggan</td>
							<td>:</td>
							<td><input type="text" name="nm_plg" value="{!! isset($plg)?$plg->nm_plg:"" !!}"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" value="{!! isset($plg)?$plg->alamat:"" !!}"></td>
						</tr>
						<tr>
							<td>No. Telpon</td>
							<td>:</td>
							<td><input type="text" name="no_telp" value="{!! isset($plg)?$plg->no_telp:"" !!}"></td>
						</tr>
						<tr>
							<td><input type="submit" name="Simpan Data"></td>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

