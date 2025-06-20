<h2>Edit Data Obat</h2>

    <form action="{{ route('obat.update', $obat['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_obat">Nama Obat:</label><br>
        <input type="text" name="nama_obat" value="{{ $obat['nama_obat'] }}" required><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" name="kategori" value="{{ $obat['kategori'] }}" required><br><br>

        <label for="stok">Stok:</label><br>
        <input type="text" name="stok" value="{{ $obat['stok'] }}" required><br><br>

        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" value="{{ $obat['harga'] }}" required><br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('obat.index') }}">Batal</a>
    </form>
