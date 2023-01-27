<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../components/headDP.php'; ?>
    <?php include '../dbCredentials.php'; ?>
    <?php include '../queries/addClientQueryDP.php'; ?>
</head>

<body>
    <h1>Dodaj klienta</h1>
    <?php
    echo '
        <form action="addClientDP.php" method="post">
            <label for="name">Imię</label>
            <input type="text" name="name" id="name" required>
            <label for="town">Miasto</label>
            <input type="text" name="town" id="town" required>
            <label for="street">Ulica</label>
            <input type="text" name="street" id="street" required>
            <label for="phone">Telefon</label>
            <input type="text" name="phone" id="phone" required>
            <input type="submit" value="Dodaj">
            </form>';
    ?>
    <?php include '../components/footerDP.php'; ?>

</body>

</html>