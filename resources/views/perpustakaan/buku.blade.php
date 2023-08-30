<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
</head>
<body>
    <h2>Form Buku</h2>
    <form action="{{ route('get_petugas') }}">
        <label for="id_buku">ID Buku:</label><br>
        <input type="text" id="id_buku" name="id_buku"><br><br>
        
        <label for="kode_buku">Kode Buku:</label><br>
        <input type="text" id="kode_buku" name="kode_buku"><br><br>
        
        <label for="judul_buku">Judul Buku:</label><br>
        <input type="text" id="judul_buku" name="judul_buku"><br><br>
        
        <label for="penulis_buku">Penulis Buku:</label><br>
        <input type="text" id="penulis_buku" name="penulis_buku"><br><br>
        
        <label for="penerbit_buku">Penerbit Buku:</label><br>
        <input type="text" id="penerbit_buku" name="penerbit_buku"><br><br>
        
        <label for="tahun_penerbit">Tahun Penerbit:</label><br>
        <input type="number" id="tahun_penerbit" name="tahun_penerbit"><br><br>
        
        <label for="stok_buku">Stok Buku:</label><br>
        <input type="number" id="stok_buku" name="stok_buku"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
