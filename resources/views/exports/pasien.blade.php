<table border="1">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasien as $psn)
            <tr>
                <td>{{ $psn['nama'] }}</td>
                <td>{{ $psn['alamat'] }}</td>
                <td>{{ $psn['tanggal_lahir'] }}</td>
                <td>{{ $psn['jenis_kelamin'] }}</td>
               
            </tr>
        @endforeach
    </tbody>
</table>