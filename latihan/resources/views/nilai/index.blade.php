<html>
<head>
</head>
<body>
  <a href="{!!url('nilai/create')!!}">Tambah Data</a></br>
  <table border="1">
    <tr>
      <th>NIM</th>
      <th>Matkul</th>
      <th>UTS</th>
      <th>UAS</th>
    </tr>

    @foreach($nilai as $item)

    <tr>
      <td>{!! $item->nim !!}</td>
      <td>{!! $item->matkul !!}</td>
      <td>{!! $item->uts !!}</td>
      <td>{!! $item->uas !!}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
