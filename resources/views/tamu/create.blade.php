<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tamu</title>
</head>
<body>
    <h1>Tambah Tamu Baru</h1>
    
    <form action="/tamu" method="POST">
        @csrf
        
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>
        
        <label>Pesan:</label><br>
        <textarea name="pesan"></textarea><br><br>
        
        <button type="submit">Simpan</button>
        <a href="/tamu">Kembali</a>
    </form>
</body>
</html>