<?php
$r = 4.2;
$t = 5.4;
$p = 8.9;
$l = 14.7;
$s = 7.9;
$alas = $p * $l;
$volume= 1/6 * $alas * $t;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK102</title>
</head>
<body>
    <?php
    echo round($volume, 3) . " m3";
    ?>
</body>
</html>