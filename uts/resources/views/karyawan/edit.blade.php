<html>
<head></head>
<body>
	<form method="post" action="{!! url('kry/'.$kry->id) !!}">
		<input type="hidden" name="_method" value="PUT">
		@include('karyawan.fields')
	</form>
</body>
</html>