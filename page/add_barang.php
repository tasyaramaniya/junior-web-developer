<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $supplier = $_POST['supplier'];

    // Buat SQL INSERT statement
    $sql = "INSERT INTO barang (ID, Kategori, Nama_Barang, Harga, Stok, Supplier) VALUES ('$id','$kategori', '$nama_barang', '$harga', '$stok', '$supplier')";

    if ($conn->query($sql) === TRUE) {
        echo "Barang berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
