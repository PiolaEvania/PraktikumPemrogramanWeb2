<?php
$alertNama = $alertNim = $hasil = $alertJK = "";
$nama = $nim = $jk = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['nama'])) {
        $alertNama = "Nama tidak boleh kosong";
    }
    else {
        $nama = input($_POST['nama']);
    }
    if (empty($_POST['nim'])) {
        $alertNim = "NIM tidak boleh kosong";
    }
    else {
        $nim = input($_POST['nim']);
    }
    if (empty($_POST['jk'])) {
        $alertJK = "Jenis Kelamin tidak boleh kosong";
    }
    else {
        $jk = input($_POST['jk']);
    }
}

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 202</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $nama ?>"><span class="error">* <?= $alertNama ?></span></br>
        NIM: <input type="text" name="nim" value="<?= $nim ?>"><span class="error">* <?= $alertNim ?></span></br>
        Jenis Kelamin: <span class="error">* <?= $alertJK ?></span></br>
        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki </br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan </br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </br>

    <?php
    if (!empty($nama) && !empty($nim) && !empty($jk)) {
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jk <br>";
    }
    ?>
</body>
</html>