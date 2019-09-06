<html>
<head></head>
<body>
  <form method="post" action="{!! url('mhs')!!}">
    @csrf
    NIM : <input type="text" name="nim"><br>
    Nama : <input type="text" name="nama"><br>
    Kelas : <input type="text" name="kelas"><br>
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>
