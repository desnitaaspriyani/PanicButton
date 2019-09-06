@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang</div>
                    <form method="post" action="{!! url('brg')!!}">
    					@csrf
					    <table>
							<tr>
								<td>Kode Barang</td>
								<td>:</td>
								<td><input type="text" name="kd_barang"></td>
							</tr>
							<tr>
								<td>Nama Barang</td>
								<td>:</td>
								<td><input type="text" name="nm_barang"></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td>:</td>
								<td><input type="text" name="stok"></td>
							</tr>
							<tr>
								<td>Harga Beli</td>
								<td>:</td>
								<td><input type="text" name="hrg_beli"></td>
							</tr>
							<tr>
								<td>Harga Jual</td>
								<td>:</td>
								<td><input type="text" name="hrg_jual"></td>
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


