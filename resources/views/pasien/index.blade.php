@include('layout.navbar')

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif
<h2>Daftar Pasien</h2>
 || <a href="{{ route('export.pasien') }}">
    <button type="button">Export ke Excel</button>
</a>
<br><br>
<br>
<a href="{{ route('pasien.create') }}">Tambah Pasien</a>

<table border="1">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th> <!-- Kolom aksi -->
        </tr>
    </thead>
    <tbody>
        @foreach ($pasien as $psn)
            <tr>
                <td>{{ $psn['nama'] }}</td>
                <td>{{ $psn['alamat'] }}</td>
                <td>{{ $psn['tanggal_lahir'] }}</td>
                <td>{{ $psn['jenis_kelamin'] }}</td>
                <td>
                    <a href="{{ route('pasien.edit', $psn['id']) }}">Edit</a>

                    <form action="{{ route('pasien.destroy', $psn['id']) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Apakah kamu yakin ingin menghapus pasien ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
