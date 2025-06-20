@include('layout.navbar')

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif
<h2>Daftar Obat</h2>
 || <a href="{{ route('obat.export') }}">
    <button type="button">Export ke Excel</button>
</a>
<br><br>
<br>
<a href="{{ route('obat.create') }}">Tambah Obat</a>

<table border="1">
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th> <!-- Kolom aksi -->
        </tr>
    </thead>
    <tbody>
        @foreach ($obat as $obt)
            <tr>
                <td>{{ $obt['nama_obat'] }}</td>
                <td>{{ $obt['kategori'] }}</td>
                <td>{{ $obt['stok'] }}</td>
                <td>{{ $obt['harga'] }}</td>
                <td>
                    <a href="{{ route('obat.edit', $obt['id']) }}">Edit</a>

                    <form action="{{ route('obat.destroy', $obt['id']) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Apakah kamu yakin ingin menghapus obat ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
