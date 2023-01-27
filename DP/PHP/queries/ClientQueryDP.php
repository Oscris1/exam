<?php
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM klient";
$rs = $conn->query($sql);
$num = $rs->num_rows;
$conn->close();
?>