<?php
include 'Latihan_09_config.php';

$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
$tahun_lulus = isset($_GET['tahun_lulus']) ? $_GET['tahun_lulus'] : '';

$sql = "SELECT * FROM alumni WHERE 1=1";
if ($nama != '') {
    $sql .= " AND nama LIKE '%$nama%'";
}
if ($jurusan != '') {
    $sql .= " AND jurusan LIKE '%$jurusan%'";
}
if ($tahun_lulus != '') {
    $sql .= " AND tahun_lulus = '$tahun_lulus'";
}

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penelusuran Alumni</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Penelusuran Alumni</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                  </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['jurusan'] . "</td>";
                echo "<td>" . $row['tahun_lulus'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada alumni yang ditemukan.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
