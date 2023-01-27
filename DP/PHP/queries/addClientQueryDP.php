<?php
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) && isset($_POST['town']) && isset($_POST['street']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $town = $_POST['town'];
    $street = $_POST['street'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `klient` (`name`, `town`, `street`, `phone`)
     VALUES ('$name', '$town', '$street', '$phone')";
    $conn->query($sql);
}
$conn->close();
?>