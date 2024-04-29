<?php
require_once 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE ID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $supplier = $_POST['supplier'];

    $sql = "UPDATE barang SET Kategori='$kategori', Nama_Barang='$nama_barang', Harga='$harga', Stok='$stok', Supplier='$supplier' WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Edited successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div style="justify-content: center; display: flex;">
        <div class="edit-brg">
        <h2>Edit Barang</h2>
        <!-- Formulir pengeditan data barang -->
        <form method="post">
            Kategori: <input type="text" name="kategori" value="<?php echo $row['Kategori']; ?>"><br>
            Nama Barang: <input type="text" name="nama_barang" value="<?php echo $row['Nama_Barang']; ?>"><br>
            Harga: <input type="text" name="harga" value="<?php echo $row['Harga']; ?>"><br>
            Stok: <input type="text" name="stok" value="<?php echo $row['Stok']; ?>"><br>
            Supplier: <input type="text" name="supplier" value="<?php echo $row['Supplier']; ?>"><br>
            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
            <input type="submit" value="Submit"> <br>
            <a href="admin.php"> < Halaman Admin</a>
        </form>
        </div>
    </div>
</body>
</html>