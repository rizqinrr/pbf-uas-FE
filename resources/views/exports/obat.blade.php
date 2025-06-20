<table border="1">
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obat as $obt)
            <tr>
                <td>{{ $obt['nama_obat'] }}</td>
                <td>{{ $obt['kategori'] }}</td>
                <td>{{ $obt['stok'] }}</td>
                <td>{{ $obt['harga'] }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
