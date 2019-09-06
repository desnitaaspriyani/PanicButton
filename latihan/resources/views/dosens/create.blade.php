<html>
<head></head>
<body>
  <form method="post" action="{!! url('dosen')!!}">
    @csrf
    Nama : <input type="text" name="nama"><br>
    NIP : <input type="text" name="nip"><br>
    Prodi : <input type="text" name="prodi"><br>
    Email : <input type="text" name="email"><br>
    NIDN : <input type="text" name="nidn"><br>
    Tanggal Lahir : <input type="date" name="tgl_lhir">
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>
