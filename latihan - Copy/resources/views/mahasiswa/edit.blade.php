<html>
<head></head>
<body>
  <form method="post" action="{!!url('mhs/'.$mhs->id)!!}">
    <input type="hidden" name="_method" value="PUT">
    @include('mahasiswa.fields')
  </form>
</body>
</html>
