<?php
include 'Latihan_09_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $posisi = $_POST['posisi'];
    $perusahaan = $_POST['perusahaan'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $tanggal_posting = date('Y-m-d');

    $sql = "INSERT INTO lowongan (posisi, perusahaan, lokasi, deskripsi, tanggal_posting, status) 
            VALUES ('$posisi', '$perusahaan', '$lokasi', '$deskripsi', '$tanggal_posting', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Lowongan kerja berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lowongan Kerja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Lowongan Kerja</h2>
        <form method="POST" action="tambah_lowongan.php">
            <div class="form-group mb-3">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi" required>
            </div>
            <div class="form-group mb-3">
                <label for="perusahaan">Perusahaan:</label>
                <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
            </div>
            <div class="form-group mb-3">
                <label for="lokasi">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Lowongan</button>
        </form>
    </div>
</body>
</html>
