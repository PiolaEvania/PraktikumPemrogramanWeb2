<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 303</title>
</head>
<body>
    <form method="post">
        Batas Bawah : <input type="number" name="bawah"></br>
        Batas Atas : <input type="number" name="atas"></br>
        <input type="submit" name="submit" value="Cetak">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
    $i = $bawah;
    do {
        if (($i + 7) % 5 == 0) {
            echo "<img src='bintang.png' width='15px' height='15px'>";
        }
        else {
            echo $i;
        }
        echo "&nbsp";
        $i++;
    }
    while ($i <= $atas);
}
?>