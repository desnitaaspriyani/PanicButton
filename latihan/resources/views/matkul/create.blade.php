<html>
<head></head>
<body>
  <form method="post" action="{!! url('makul')!!}">
    @csrf
    Mata Kuliah : <input type="text" name="matkul"><br>
    SKS : <input type="text" name="sks"><br>
    Nama Dosen : <input type="text" name="nm_dosen"><br>
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>
