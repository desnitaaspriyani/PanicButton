<html>
<head>
</head>
<body>
  <a href="{!!url('dosen/create')!!}">Tambah Data</a></br>
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>NIP</th>
      <th>Prodi</th>
      <th>Email</th>
      <th>NIDP</th>
      <th>Tanggal Lahir</th>
    </tr>

    @foreach($dosen as $item)

    <tr>
      <td>{!! $item->nama !!}</td>
      <td>{!! $item->nip !!}</td>
      <td>{!! $item->prodi !!}</td>
      <td>{!! $item->email !!}</td>
      <td>{!! $item->nidn !!}</td>
      <td>{!! $item->tgl_lhir !!}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
