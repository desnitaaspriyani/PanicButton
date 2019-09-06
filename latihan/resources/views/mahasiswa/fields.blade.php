@csrf
NIM : <input type="text" name="nim" value="{!! isset($mahasiswa)?$mahasiswa->nim:"" !!}"><br>
Nama : <input type="text" name="nama" value="{!! isset($mahasiswa)?$mahasiswa->nama:"" !!}"><br>
Kelas : <input type="text" name="kelas" value="{!! isset($mahasiswa)?$mahasiswa->kelas:"" !!}"><br>
<input type="submit" value="Simpan Data">
