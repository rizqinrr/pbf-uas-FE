<h2>Edit Data Pasien</h2>

<form action="{{ route('pasien.update', $pasien['id']) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama Pasien:</label><br>
    <input type="text" name="nama" value="{{ $pasien['nama'] }}" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" name="alamat" value="{{ $pasien['alamat'] }}" required><br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" value="{{ $pasien['tanggal_lahir'] }}" required><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <select name="jenis_kelamin" id="">
      <option value="L" {{ $pasien['jenis_kelamin'] == 'L' ? 'selected' : '' }}>Laki-Laki</option>
      <option value="P" {{ $pasien['jenis_kelamin'] == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select>

    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('pasien.index') }}">Batal</a>
</form>
