<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 203</title>
</head>
<body>
    <form method="post">
        Nilai : <input type="number" name="suhu"></br>
        Dari :</br>
        <input type="radio" name="dari" value="Celcius">Celcius</br>
        <input type="radio" name="dari" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="dari" value="Reamur">Reamur</br>
        <input type="radio" name="dari" value="Kelvin">Kelvin</br>
        Ke :</br>
        <input type="radio" name="ke" value="Celcius">Celcius</br>
        <input type="radio" name="ke" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="ke" value="Reamur">Reamur</br>
        <input type="radio" name="ke" value="Kelvin">Kelvin</br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</br>

<?php
if (isset($_POST['submit'])) {
    $suhu = $_POST['suhu'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];
    if ($dari == "Celcius") {
        if ($ke == "Celcius") {
            echo "<h2>Hasil Konversi : $suhu &deg;C</h2>";
        }
        elseif ($ke == "Fahrenheit") {
            echo "<h2>Hasil Konversi : ". ($suhu * 1.8 + 32) ." &deg;F</h2>";
        }
        elseif ($ke == "Reamur") {
            echo "<h2>Hasil Konversi : ". ($suhu * 0.8) ." &deg;R</h2>";
        }
        else {
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) ." &deg;K</h2>";
        }
    }
    elseif ($dari == "Fahrenheit") {
        if ($ke == "Celcius") {
            echo "<h2>Hasil Konversi : ". ($suhu - 32) / 1.8 ." &deg;C</h2>";
        }
        elseif ($ke == "Fahrenheit") {
            echo "<h2>Hasil Konversi : $suhu &deg;F</h2>";
        }
        elseif ($ke == "Reamur") {
            echo "<h2>Hasil Konversi : ". ($suhu - 32) / 2.25 ." &deg;R</h2>";
        }
        else {
            echo "<h2>Hasil Konversi : " . ($suhu + 459.67) / 1.8 ." &deg;K</h2>";
        }
    }
    elseif ($dari == "Reamur") {
        if ($ke == "Celcius") {
            echo "<h2>Hasil Konversi : ". ($suhu * 1.25) ." &deg;C</h2>";
        }
        elseif ($ke == "Fahrenheit") {
            echo "<h2>Hasil Konversi : ". ($suhu * 2.25 + 32) ." &deg;F</h2>";
        }
        elseif ($ke == "Reamur") {
            echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";
        }
        else {
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) / 0.8 ." &deg;K</h2>";
        }
    }
    else {
        if ($ke == "Celcius") {
            echo "<h2>Hasil Konversi : ". ($suhu - 273.15) ." &deg;C</h2>";
        }
        elseif ($ke == "Fahrenheit") {
            echo "<h2>Hasil Konversi : ". ($suhu * 1.8 - 459.67) ." &deg;F</h2>";
        }
        elseif ($ke == "Reamur") {
            echo "<h2>Hasil Konversi : ". ($suhu * 0.8 - 273.15) ." &deg;R</h2>";
        }
        else {
            echo "<h2>Hasil Konversi : $suhu &deg;K</h2>";
        }
    }
}
?>
</body>
</html>