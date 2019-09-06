@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Karyawan</div>
                    <form method="post" action="{!! url('kry')!!}">
    					@csrf
					    <table>
							<tr>
								<td>Id Karyawan</td>
								<td>:</td>
								<td><input type="text" name="id_kry"></td>
							</tr>
							<tr>
								<td>Nama Karyawan</td>
								<td>:</td>
								<td><input type="text" name="nm_kry"></td>
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


