<html>
<head>
</head>
<body>
  <a href="{!!url('mhs/create')!!}">Tambah Data</a></br>
  <table border="1">
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Action</th>
    </tr>

    @foreach($mhs as $item)

    <tr>
      <td>{!! $item->nim !!}</td>
      <td>{!! $item->nama !!}</td>
      <td>{!! $item->kelas !!}</td>
      <td>
        <a href="{!! url('mhs/'.$item->id.'/edit')!!}">
          edit
        </a>
        <form method="post" action="{{url('mhs/'.$item->id)}}">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <input type="submit" value="hapus"
            onclick="return confirm('Apakah mau dihapus');">
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
