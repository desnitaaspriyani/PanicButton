<html>
<head></head>
<body>
	<form method="post" action="{!! url('trans/'.$trans->id) !!}">
		<input type="hidden" name="_method" value="PUT">
		@include('transaksi.fields')
	</form>
</body>
</html>