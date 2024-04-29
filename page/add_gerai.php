<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_gerai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    // Buat SQL INSERT statement
    $sql = "INSERT INTO gerai (ID_Gerai, Nama, Alamat, Kota, Telepon) VALUES ('$id', '$nama', '$alamat', '$kota', '$telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "Gerai berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
