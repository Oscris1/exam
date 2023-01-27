<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/storageQueryDP.php'; ?>
</head>

<body>
    <header>
    <h1>Piętka Sklep</h1>
        <h3>Zobacz Towary</h3>
    </header>
    <table>
        <?php
            echo'
            <tr>
                <th>Nazwa</th>
                <th>Cena</th>
            </tr>';
        $i = 0;
        while ($i < $num) {
            $getRow = $rs->data_seek($i);
            $row = $rs->fetch_assoc();
            echo '
            <tr>
                <td>' . $row['name'] . '</td>
                <td>' . $row['price'] . '</td>
            </tr>
        ';
            $i++;
        }
        ?>
    </table>

    <?php include '../components/footerDP.php'; ?>
</body>

</html>