<?php
require 'functions.php';
if( isset($_POST["submit"])) {
 
if(tambah($_POST)> 0 ){
    echo "
    <script>
         alert('data berhasil ditambahkan!');
         document.localtion.href = 'index.php';
    </script>
    ";    
} else {
    echo "
    <script>
         alert('data gagal ditambahkan!');
         document.localtion.href = 'index.php';
    </script>
    "; 
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah data mahasiswa</title>
    <style>
        label {
            display: flex;
        }
    </style>
</head>
<body>
    <a href="index.php">kembali</a>
    <br>
    <h1>Tambah data mahasiswa</h1>
<form action="" method="post">
   <ul>
    <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
    </li>
    <li>
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp">
    </li>
    <li>
        <label for="email">EMAIL :</label>
        <input type="text" name="email" id="email">
    </li>
    <li>
        <label for="jurusan">JURUSAN :</label>
        <input type="text" name="jurusan" id="jurusan">
    </li>
    <li>
        <label for="gambar">GAMBAR :</label>
        <input type="file" name="gambar" id="gambar">
    </li>
    <li>
        <button type="submit" name="submit">Tambah data </button>
    </li>
   </ul>

</form>
</body>
</html>