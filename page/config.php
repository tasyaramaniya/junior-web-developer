<!-- Koneksi ke Database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtoko";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection            
if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}
echo "";