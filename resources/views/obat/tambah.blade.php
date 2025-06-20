<h2>Edit Data Obat</h2>

    <form action="{{ route('obat.store')}}" method="POST">
        @csrf

        <label for="nama_obat">Nama Obat:</label><br>
        <input type="text" name="nama_obat" required><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>

        <label for="stok">Stok:</label><br>
        <input type="text" name="stok" required><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('obat.index') }}">Batal</a>
    </form>
