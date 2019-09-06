<html>
<head>
</head>
<body>
  <a href="{!!url('makul/create')!!}">Tambah Data</a></br>
  <table border="1">
    <tr>
      <th>Mata Kuliah</th>
      <th>SKS</th>
      <th>Nama Dosen</th>
    </tr>

    @foreach($makul as $item)

    <tr>
      <td>{!! $item->matkul !!}</td>
      <td>{!! $item->sks !!}</td>
      <td>{!! $item->nm_dosen !!}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
