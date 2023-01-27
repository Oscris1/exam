<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/addOrderQueryDP.php'; ?>
</head>

<body>
    <h1>Dodaj zamówienie</h1>
    <?php
    $i = 0;
    $j = 0;
    echo '
            <form action="addOrderDP.php" method="post">
                <label for="klient_id">Klient</label>
                <select name="klient_id" id="klient_id">';
    while ($i < $clientsNum) {
        $allClients->data_seek($i);
        $row = $allClients->fetch_assoc();
        echo '<option value="' . $row['id'] . '">' . $row['name'] . ' </option>';
        $i++;
    }
    echo '
                </select>
                <label for="towar_id">Towar</label>
                <select name="towar_id" id="towar_id">';
    while ($j < $storageNum) {
        $allStorage->data_seek($j);
        $row = $allStorage->fetch_assoc();
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        $j++;
    }
    echo '
                </select>
                <label for="ilosc">Ilość</label>
                <input type="number" name="ilosc" id="ilosc" required>
                <label for="znizka">Zniżka</label>
                <input type="number" name="znizka" id="znizka" required>
                <input type="submit" value="Dodaj">
            </form>';
    ?>
    <?php include '../components/footerDP.php'; ?>



</body>

</html>