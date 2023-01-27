<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/addStorageQueryDP.php'; ?>
</head>

<body>
    <h1>Dodaj towar</h1>

    <?php
    echo '
        <form action="addStorageDP.php" method="post">
            <label for="name">Nazwa</label>
            <input type="text" name="name" id="name" required>
            <label for="price">Cena</label>
            <input type="text" name="price" id="price" required>
            <input type="submit" value="Dodaj">
            </form>';
    ?>

    <?php include '../components/footerDP.php'; ?>

</body>

</html>