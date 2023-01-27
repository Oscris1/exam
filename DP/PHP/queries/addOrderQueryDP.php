<?php
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$allClientsQuery = "SELECT * FROM `klient`";
$allStorageQuery = "SELECT * FROM `towar`";
$allClients = $conn->query($allClientsQuery);
$allStorage = $conn->query($allStorageQuery);
$clientsNum = $allClients->num_rows;
$storageNum = $allStorage->num_rows;

if (isset($_POST['klient_id']) && isset($_POST['towar_id']) && isset($_POST['ilosc']) && isset($_POST['znizka'])) {
    $klient_id = $_POST['klient_id'];
    $toward_id = $_POST['towar_id'];
    $ilosc = $_POST['ilosc'];
    $znizka = $_POST['znizka'];
    $sql = "INSERT INTO `zamowienie` (`id_klient`, `id_towar`, `quantity`, `discount`)
     VALUES ('$klient_id', '$toward_id', '$ilosc', '$znizka')";
    $rs = $conn->query($sql);
    $conn->close();
}
?>