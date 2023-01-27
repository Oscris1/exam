<?php
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `zamowienie`
    INNER JOIN `klient` ON `zamowienie`.`id_klient` = `klient`.`id`
    INNER JOIN `towar` ON `zamowienie`.`id_towar` = `towar`.`id`";
$rs = $conn->query($sql);
$num = $rs->num_rows;
$conn->close();
?>