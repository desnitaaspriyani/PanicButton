@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Transaksi</div>

                    <form method="post" action="{!! url('trans')!!}">
    					@csrf
					    <table>
							<tr>
								<td>Id Transaksi</td>
								<td>:</td>
								<td><input type="text" name="id_trans" value="{!! isset($trans)?$trans->id_trans:"" !!}"></td>
							</tr>
							<tr> 
								<td>Id Karyawan</td>
								<td>:</td>
								<td>{!! Form::select('id_kry', $karyawans) !!} </td>
							</tr>
							<tr>
								<td>Id Pelanggan</td>
								<td>:</td>
								<td>{!! Form::select('id_plg', $pelanggans) !!}</td>
							</tr>
							<tr>
								<td>Kode Barang</td>
								<td>:</td>
								<td>{!! Form::select('kd_barang', $barangs) !!}</td>
							</tr>
							<tr>
								<td>Tanggal Transaki</td>
								<td>:</td>
								<td><input type="date" name="tgl_trans" value="{!! isset($trans)?$trans->tgl_trans:"" !!}"></td>
							</tr>
							<tr>
								<td>Jumlah Barang</td>
								<td>:</td>
								<td><input type="text" name="jmlh_barang" value="{!! isset($trans)?$trans->jmlh_barang:"" !!}"></td>
							</tr>
							<tr>
								<td>Harga Satuan</td>
								<td>:</td>
								<td><input type="text" name="hrg_jual" value="{!! isset($trans)?$trans->hrg_jual:"" !!}"></td>
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


