<html>
<head>
</head>
<body>
  <a href="{!!url('jurusan/create')!!}">Tambah Data</a></br>
  <table border="1">
    <tr>
      <th>Jurusan</th>
      <th>Prodi</th>
      <th>Nama Kaprodi</th>
      <th>Jumlah Mahasiswa</th>
      <th>Jumlah Pengajar</th>
    </tr>

    @foreach($jurusan as $item)

    <tr>
      <td>{!! $item->jurusan !!}</td>
      <td>{!! $item->prodi !!}</td>
      <td>{!! $item->nm_kaprodi !!}</td>
      <td>{!! $item->jum_mhs !!}</td>
      <td>{!! $item->jum_pengajar !!}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
