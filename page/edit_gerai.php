<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_gerai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    // Query memperbarui data gerai
    $sql = "UPDATE gerai SET Nama='$nama', Alamat='$alamat', Kota='$kota', Telepon='$telepon' WHERE ID_Gerai='$id'";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        echo "Edited successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM gerai WHERE ID_Gerai='$id'";
$result = $conn->query($sql);

// Mengambil baris data
$row = $result->fetch_assoc();

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gerai</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div style="justify-content: center; display: flex;">
        <div class="edit-gr">
            <h2>Edit Gerai</h2>
            <!-- Formulir pengeditan data supplier -->
            <form method="post">
            Nama: <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"><br>
            Alamat: <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"><br>
            Kota: <input type="text" name="kota" value="<?php echo $row['Kota']; ?>"><br>
            Telepon: <input type="text" name="telepon" value="<?php echo $row['Telepon']; ?>"><br>
            <input type="hidden" name="id_gerai" value="<?php echo $row['ID_Gerai']; ?>">
            <input type="submit" value="Submit"><br>
            <a href="admin.php"> < Halaman Admin</a>
        </div>
    </div>
</form>
</body>
</html>