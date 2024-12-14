<?php
require 'functions.php';

// ambil data di URL
$id =$_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST{"submit"}) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
           <script>
               alert('data berhasil diubah');
               document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                documenrt.location.href = 'index.php';
            </script>
        ";
    }

            
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ubah data mahasiswa</title>
    <style>
        label {
            display: flex;
        }
    </style>
</head>
<body>
    <a href="index.php">kembali</a>
    <br>
    <hi>Ubah data Mahasiswa</hi>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
        <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
</li>
<li>
                <label for="nrp">NRP : </label>
                <input type="next" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
</li>
<li>
        <label for="email">Email :</label>
        <input type="text" name="email"  id="email" value="<?= $mhs["email"]; ?>">
</li>
<li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
</li>
<li>
        <label for="gambar">Gambar :</label> <br>
        <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
        <input type="file" name="gambar" id="gambar">
</li>
<li>
    <button type="submit" name="submit">Ubah Data!</button>
</li>
</ul>
    
    </form>
    </body>
    </html>