<html>
<head></head>
<body>
  <form method="post" action="{!! url('nilai')!!}">
    @csrf
    NIM : <input type="text" name="nim"><br>
    Mata Kuliah : <input type="text" name="matkul"><br>
    UTS : <input type="text" name="uts"><br>
    UAS : <input type="text" name="uas"><br>
    <input type="submit" value="Simpan Data">
  </form>
</body>
</html>
