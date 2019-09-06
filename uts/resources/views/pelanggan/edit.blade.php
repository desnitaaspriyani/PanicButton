<html>
<head></head>
<body>
	<form method="post" action="{!! url('plg/'.$plg->id) !!}">
		<input type="hidden" name="_method" value="PUT">
		@include('pelanggan.fields')
	</form>
</body>
</html>