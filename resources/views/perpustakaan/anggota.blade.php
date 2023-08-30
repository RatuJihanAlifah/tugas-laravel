<!DOCTYPE html>
<html>
<head>
    <title>Form Anggota</title>
</head>
<body>
    <h2>Form Anggota</h2>
    <form action="{{ route('get_buku')}}">
        <label for="id_anggota">ID Anggota:</label><br>
        <input type="text" id="id_anggota" name="id_anggota"><br><br>
        
        <label for="kode_anggota">Kode Anggota:</label><br>
        <input type="text" id="kode_anggota" name="kode_anggota"><br><br>
        
        <label for="nama_anggota">Nama Anggota:</label><br>
        <input type="text" id="nama_anggota" name="nama_anggota"><br><br>
        
        <label for="jk_anggota">Jenis Kelamin:</label><br>
        <input type="radio" id="jk_laki" name="jk_anggota" value="Laki-laki">
        <label for="jk_laki">Laki-laki</label>
        <input type="radio" id="jk_perempuan" name="jk_anggota" value="Perempuan">
        <label for="jk_perempuan">Perempuan</label><br><br>
        
        <label for="jurusan_anggota">Jurusan:</label><br>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TEI">TEI</option>
            <option value="TM">TM</option>
            <option value="TPGM">TPGM</option>
            <option value="TITL">TITL</option>
            <option value="DPIB">DPIB</option>
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
            <option value="TPL">TPL</option>
            <option value="TFLM">TFLM</option>    
        </select><br><br>
        
        <label for="no_telp_anggota">Nomor Telepon:</label><br>
        <input type="tel" id="no_telp_anggota" name="no_telp_anggota"><br><br>
        
        <label for="alamat_anggota">Alamat:</label><br>
        <textarea id="alamat_anggota" name="alamat_anggota"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
