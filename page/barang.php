<?php
require_once 'config.php';

// Search
$search = isset($_GET["search"]) ? $_GET["search"] : "";

// Query For Search
$sql = "SELECT * FROM barang";
if (!empty($search)) {
    $sql .= " WHERE Nama_Barang LIKE '%$search%'";
}
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
    <title>Website Gudang</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Website Gudang Toko Indonesia</h1>
        <form method="GET">
            <input type="text" name="search" placeholder="Cari Nama Barang" value="<?php echo $search; ?>">
            <input type="submit" value="Cari">
        </form>
    </header>

    <main>
        <section class="content">
            <div class="table-1">
                <h3>Data Barang</h3>
                <table border="1" >
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Supplier</th>
                    </tr>
                    <!-- Pemeriksaan hasil query -->
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["ID"] . "</td>";
                            echo "<td>" . $row["Kategori"] . "</td>";
                            echo "<td>" . $row["Nama_Barang"] . "</td>";
                            echo "<td>" . $row["Harga"] . "</td>";
                            echo "<td>" . $row["Stok"] . "</td>";
                            echo "<td>" . $row["Supplier"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                    }
                    ?>
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
                    </tr>
                    </thead>
                    <!-- Pemeriksaan hasil query -->
                    <tbody>
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["ID_Supplier"] . "</td>";
                            echo "<td>" . $row["Nama"] . "</td>";
                            echo "<td>" . $row["Alamat"] . "</td>";
                            echo "<td>" . $row["Kota"] . "</td>";
                            echo "<td>" . $row["Telepon"] . "</td>";
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
                    </tr>
                    </thead>
                    <!-- Pemeriksaan hasil query -->
                    <tbody>
                    <?php
                    if ($result3->num_rows > 0) {
                        while ($row = $result3->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["ID_Gerai"] . "</td>";
                            echo "<td>" . $row["Nama"] . "</td>";
                            echo "<td>" . $row["Alamat"] . "</td>";
                            echo "<td>" . $row["Kota"] . "</td>";
                            echo "<td>" . $row["Telepon"] . "</td>";
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
