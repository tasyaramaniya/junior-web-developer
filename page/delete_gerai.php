<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM gerai WHERE ID_Gerai='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>