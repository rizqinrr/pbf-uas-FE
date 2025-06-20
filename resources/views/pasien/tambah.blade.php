<h2>Edit Data Pasien</h2>

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf

    <label for="nama">Nama Pasien:</label><br>
    <input type="text" name="nama" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" name="alamat" required><br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <select name="jenis_kelamin" id="">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
    <br><br>
    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('pasien.index') }}">Batal</a>
</form>
