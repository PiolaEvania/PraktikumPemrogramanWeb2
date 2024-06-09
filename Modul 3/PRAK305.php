<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 305</title>
</head>
<body>
    <form method="post">
        <input type="text" name="teks" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $teks = $_POST['teks'];
    $p = strlen($teks);
    $input = str_split($teks);
    $j = 0;
    $k = 0;
    while ($k < $p) {
        echo strtoupper($input[$j]);
        for ($i = 1; $i < $p; $i++) {
            echo strtolower($input[$j]);
        }
        $k++;
        $j++;
    }
}
?>