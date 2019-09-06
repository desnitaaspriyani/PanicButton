@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang</div>
    					@csrf
					    <table>
							<tr>
								<td>Kode Barang</td>
								<td>:</td>
								<td><input type="text" name="kd_barang" value="{!! isset($brg)?$brg->kd_barang:"" !!}"></td>
							</tr>
							<tr>
								<td>Nama Barang</td>
								<td>:</td>
								<td><input type="text" name="nm_barang" value="{!! isset($brg)?$brg->nm_barang:"" !!}"></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td>:</td>
								<td><input type="text" name="stok" value="{!! isset($brg)?$brg->stok:"" !!}"></td>
							</tr>
							<tr>
								<td>Harga Beli</td>
								<td>:</td>
								<td><input type="text" name="hrg_beli" value="{!! isset($brg)?$brg->hrg_beli:"" !!}"></td>
							</tr>
							<tr>
								<td>Harga Jual</td>
								<td>:</td>
								<td><input type="text" name="hrg_jual" value="{!! isset($brg)?$brg->hrg_jual:"" !!}"></td>
							</tr>
							<tr>
								<td><input type="submit" value="Simpan Data"></td>
							</tr>
					 	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


