<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir pengeditan
    $id_supplier = $_POST['id_supplier'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    // Query memperbarui data supplier
    $sql = "UPDATE supplier SET Nama='$nama', Alamat='$alamat', Kota='$kota', Telepon='$telepon' WHERE ID_Supplier='$id_supplier'";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        echo "Edited successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Mengambil id supplier dari parameter GET
$id = $_GET['id'];
$sql = "SELECT * FROM supplier WHERE ID_Supplier='$id'";
$result = $conn->query($sql);

// Pemeriksaan hasil
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data not found.";
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div style="justify-content: center; display: flex;">
        <div class="edit-spp">
            <h2>Edit Supplier</h2>
            <!-- Formulir pengeditan data supplier -->
            <form method="post">
                Nama: <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"><br>
                Alamat: <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"><br>
                Kota: <input type="text" name="kota" value="<?php echo $row['Kota']; ?>"><br>
                Telepon: <input type="text" name="telepon" value="<?php echo $row['Telepon']; ?>"><br>
                <input type="hidden" name="id_supplier" value="<?php echo $row['ID_Supplier']; ?>">
                <input type="submit" value="Submit"><br>
                <a href="admin.php"> < Halaman Admin</a>
            </form>
        </div>
    </div>
</body>
</html>
