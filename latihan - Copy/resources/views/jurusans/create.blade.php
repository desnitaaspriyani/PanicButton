<html>
<head></head>
<body>
  <form method="post" action="{!! url('jurusan')!!}">
    @csrf
    Jurusan : <input type="text" name="jurusan"><br>
    Prodi : <input type="text" name="prodi"><br>
    Nama Kaprodi : <input type="text" name="nm_kaprodi"><br>
    Jumlah Mahasiswa : <input type="text" name="jum_mhs"><br>
    Jumlah Pengajar : <input type="text" name="jum_pengajar"><br>
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>
