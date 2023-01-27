<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/ClientQueryDP.php'; ?>
</head>

<body>
    <h1>Nasi klienci</h1>
    <table>
        <?php
        echo '
        <tr>
        <th>Imię</th>
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
                <td>' . $row['name'] . '</td>
                <td>' . $row['town'] . '</td>
                <td>' . $row['street'] . '</td>
                <td>' . $row['phone'] . '</td>
            </tr>
        ';
            $i++;
        }
        ?>
    </table>



    <?php include '../components/footerDP.php'; ?>
</body>

</html>