<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
    
    <a href="/tamu/create">Tambah Tamu</a>
    
    <br><br>
    
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>
        @if(count($tamu) > 0)
            @foreach($tamu as $index => $t)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $t['nama'] }}</td>
                <td>{{ $t['email'] }}</td>
                <td>{{ $t['pesan'] }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">Belum ada data tamu</td>
            </tr>
        @endif
    </table>
</body>
</html>