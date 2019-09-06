<html>
<head></head>
<body>
	<form method="post" action="{!! url('brg/'.$brg->id) !!}">
		<input type="hidden" name="_method" value="PUT">
		@include('barang.fields')
	</form>
</body>
</html>