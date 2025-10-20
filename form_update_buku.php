<?php
include("navbar.php");
include("connect.php");

$id = intval($_GET['id']);

$query = "SELECT * FROM buku WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $buku = $row;
} else {
    echo "<script>
            alert('Data buku tidak ditemukan!');
            window.location.href = 'list_buku.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <center><h1>Perbarui Detail Buku</h1></center>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($buku['id']) ?>">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="judul" id="judul" 
                                       value="<?= htmlspecialchars($buku['judul']) ?>" required>
                                <label for="judul">Judul Buku</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="penulis" id="penulis" 
                                       value="<?= htmlspecialchars($buku['penulis']) ?>" required>
                                <label for="penulis">Penulis</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="penerbit" id="penerbit" 
                                       value="<?= htmlspecialchars($buku['penerbit']) ?>">
                                <label for="penerbit">Penerbit</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" 
                                       value="<?= htmlspecialchars($buku['tahun_terbit']) ?>">
                                <label for="tahun_terbit">Tahun Terbit</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="genre" id="genre" 
                                       value="<?= htmlspecialchars($buku['genre']) ?>">
                                <label for="genre">Genre</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="jumlah_halaman" id="jumlah_halaman" 
                                       value="<?= htmlspecialchars($buku['jumlah_halaman']) ?>">
                                <label for="jumlah_halaman">Jumlah Halaman</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="stok" id="stok" 
                                       value="<?= htmlspecialchars($buku['stok']) ?>" required>
                                <label for="stok">Stok Buku</label>
                            </div>

                            <button type="submit" name="update" class="btn btn-primary w-100 mt-3">
                                Simpan Perubahan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
