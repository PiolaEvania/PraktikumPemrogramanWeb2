<?php
$samsung = ["SGS22" => 'Samsung Galaxy S22', "SGS22P" => 'Samsung Galaxy S22+', "SGA03" => 'Samsung Galaxy A03', "SGX5" => 'Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <style>
        th{
            font-size: 24px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <table border = 1>
        <tr bgcolor = red>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?= $samsung["SGS22"] ?></td>
        </tr>
        <tr>
            <td><?= $samsung["SGS22P"] ?></td>
        </tr>
        <tr>
            <td><?= $samsung["SGA03"] ?></td>
        </tr>
        <tr>
            <td><?= $samsung["SGX5"] ?></td>
        </tr>
    </table>
</body>
</html>