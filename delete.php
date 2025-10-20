<?php
require "connect.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    
    $query = "DELETE FROM buku WHERE id = $id";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_buku.php");
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data buku!'); window.location='list_buku.php';</script>";
    }
}

mysqli_close($conn);
?>
