@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pelanggan</div>
                    <form method="post" action="{!! url('plg')!!}">
    					@csrf
					    <table>
							<tr>
								<td>Id Pelanggan</td>
								<td>:</td>
								<td><input type="text" name="id_plg"></td>
							</tr>
							<tr>
								<td>Nama Pelanggan</td>
								<td>:</td>
								<td><input type="text" name="nm_plg"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><input type="text" name="alamat"></td>
							</tr>
							<tr>
								<td>No. Telpon</td>
								<td>:</td>
								<td><input type="text" name="no_telp"></td>
							</tr>
					 	</table>
					    <input type="submit" value="Simpan Data">
					  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


