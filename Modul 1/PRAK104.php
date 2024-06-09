<?php
$samsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
</head>
<body>
    <table border = 1>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?= $samsung[0] ?></td>
        </tr>
        <tr>
            <td><?= $samsung[1] ?></td>
        </tr>
        <tr>
            <td><?= $samsung[2] ?></td>
        </tr>
        <tr>
            <td><?= $samsung[3] ?></td>
        </tr>
    </table>
</body>
</html>