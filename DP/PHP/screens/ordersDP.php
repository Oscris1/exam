<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/ordersQueryDP.php'; ?>
</head>

<body>
    <h1>Zamówienia sklep Piętka</h1>
    <table>

        <?php
        echo '
        <tr>
        <th>Produkt</th>
        <th>Ilość</th>
        <th>Cena</th>
        <th>Zniżka</th> 
        <th>Miasto</th>
        <th>Ulica</th>
        <th>Telefon</th>
        </tr>
        ';
        $i = 0;
        while ($i < $num) {
            $getRow = $rs->data_seek($i);
            $row = $rs->fetch_assoc();
            echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['quantity'] . '</td>
                    <td>' . $row['price'] . '</td>
                    <td>' . $row['discount'] . '</td>
                    <td>' . $row['town'] . '</td>
                    <td>' . $row['street'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    
                </tr>
                <button> hey </button>
            ';
            $i++;
        }
        ?>
    </table>

    <?php include '../components/footerDP.php'; ?>
</body>

</html>