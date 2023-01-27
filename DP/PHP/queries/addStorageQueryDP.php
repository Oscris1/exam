<?php
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) && isset($_POST['price'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "INSERT INTO `towar` (`name`, `price`)
     VALUES ('$name', '$price')";
    $conn->query($sql);
}
$conn->close();
?>