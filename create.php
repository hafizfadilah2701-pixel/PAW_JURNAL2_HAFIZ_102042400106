<?php
require "connect.php";

if (isset($_POST["create"])) {
    $judul          = $_POST["xjudul"];
    $penulis        = $_POST["xpenulis"];
    $penerbit       = $_POST["xpenerbit"];
    $tahun_terbit   = $_POST["xtahun_terbit"];
    $genre          = $_POST["xgenre"];
    $jumlah_halaman = $_POST["xjumlah_halaman"];
    $stok           = $_POST["xstok"];

    
    $query = "INSERT INTO bUKU (judul, penulis, penerbit, tahun_terbit, genre, jumlah_halaman, stok) 
              VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$genre', '$jumlah_halaman', '$stok')";

    mysqli_query($conn, $query);

    
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Data buku berhasil ditambahkan.'); window.location='list_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data buku!'); window.location='form_create_buku.php';</script>";
    }
}
?>
