<?php 
require_once 'config.php';

// Query SQL 1
$sql = "SELECT * FROM barang";
$result = $conn->query($sql);

// Query SQL 2
$sql2 = "SELECT * FROM supplier";
$result2 = $conn->query($sql2);

// Query SQL 3
$sql3 = "SELECT * FROM gerai";
$result3 = $conn->query($sql3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gudang</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Admin Gudang Toko Indonesia</h1>
    </header>
    
    <main>
    <section class="content">
        <div class="all-add">
            <div class="add-barang">
                        <h3>Add Barang</h3>
                        <form action="add_barang.php" method="POST">
                            <label for="id">ID:</label>
                            <input type="text" id="id" name="id"><br><br>
                            <label for="kategori">Kategori:</label>
                            <input type="text" id="kategori" name="kategori" required><br><br>
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="text" id="nama_barang" name="nama_barang" required><br><br>
                            <label for="harga">Harga:</label>
                            <input type="text" id="harga" name="harga" required><br><br>
                            <label for="stok">Stok:</label>
                            <input type="text" id="stok" name="stok" required><br><br>
                            <label for="supplier">Supplier:</label>
                            <input type="text" id="supplier" name="supplier" required><br><br>
                            <input type="submit" value="Tambahkan">
                        </form>
            </div>

            <div class="add-supplier">
                        <h3>Add Supplier</h3>
                        <form action="add_supplier.php" method="POST">
                            <label for="id">ID Supplier:</label>
                            <input type="text" id="id_supplier" name="id_supplier"><br><br>
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" required><br><br>
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" required><br><br>
                            <label for="kota">Kota:</label>
                            <input type="text" id="kota" name="kota" required><br><br>
                            <label for="telepon">Telepon:</label>
                            <input type="text" id="telepon" name="telepon" required><br><br>
                            <div class="button-submit">
                                <input type="submit" value="Tambahkan">
                            </div>
                        </form>
            </div>

            <div class="add-gerai">
                        <h3>Add Gerai</h3>
                        <form action="add_gerai.php" method="POST">
                            <label for="id">ID Gerai:</label>
                            <input type="text" id="id_gerai" name="id_gerai"><br><br>
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" required><br><br>
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" required><br><br>
                            <label for="kota">Kota:</label>
                            <input type="text" id="kota" name="kota" required><br><br>
                            <label for="telepon">Telepon:</label>
                            <input type="text" id="telepon" name="telepon" required><br><br>
                            <input type="submit" value="Tambahkan">
                        </form>
                    </div>
        </div>

            <div class="table-1">
                <h3>Data Barang</h3>
                <table border="1" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Supplier</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <!-- Pemeriksaan hasil query -->
                    <tbody>
                    <?php 
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["ID"]."</td>";
                                echo "<td>".$row["Kategori"]."</td>";
                                echo "<td>".$row["Nama_Barang"]."</td>";
                                echo "<td>".$row["Harga"]."</td>";
                                echo "<td>".$row["Stok"]."</td>";
                                echo "<td>".$row["Supplier"]."</td>";
                                echo "<td>";
                                echo "<a href='edit_barang.php?id=".$row["ID"]."'>Edit</a> || ";
                                echo "<a href='delete_barang.php?id=".$row["ID"]."'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                        }
                    ?> 
                    </tbody>
                </table>

            </div>

            <div class="table-2">
                <h3>Data Supplier</h3>
                <table border="1" >
                    <thead>
                    <tr>
                        <th>ID Supplier</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <!-- Pemeriksaan hasil query -->
                    <tbody>
                    <?php 
                        if ($result2->num_rows > 0) {
                            while ($row = $result2->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["ID_Supplier"]."</td>";
                                echo "<td>".$row["Nama"]."</td>";
                                echo "<td>".$row["Alamat"]."</td>";
                                echo "<td>".$row["Kota"]."</td>";
                                echo "<td>".$row["Telepon"]."</td>";
                                echo "<td>";
                                echo "<a href='edit_supplier.php?id=".$row["ID_Supplier"]."'>Edit</a> || ";
                                echo "<a href='delete_supplier.php?id=".$row["ID_Supplier"]."'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                        }
                    ?>
                    </tbody>
                </table>

            </div>

            <div class="table-3">
                <h3>Data Gerai</h3>
                <table border="1" >
                    <thead>
                    <tr>
                        <th>ID Gerai</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <!-- Pemeriksaan hasil query -->
                    <tbody>
                    <?php 
                        if ($result3->num_rows > 0) {
                            while ($row = $result3->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["ID_Gerai"]."</td>";
                                echo "<td>".$row["Nama"]."</td>";
                                echo "<td>".$row["Alamat"]."</td>";
                                echo "<td>".$row["Kota"]."</td>";
                                echo "<td>".$row["Telepon"]."</td>";
                                echo "<td>";
                                echo "<a href='edit_gerai.php?id=".$row["ID_Gerai"]."'>Edit</a> || ";
                                echo "<a href='delete_gerai.php?id=".$row["ID_Gerai"]."'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                        }
                    ?>
                    </tbody>
                </table>

            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            &copy; 2024
        </div>
    </footer>
</body>
</html>