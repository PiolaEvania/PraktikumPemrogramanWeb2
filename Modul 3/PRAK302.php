<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 302</title>
</head>
<body>
    <form method="post">
      Tinggi : <input type="text" name="tinggi" id="tinggi"><br>
      Alamat Gambar : <input type="text" name="img" id="img"><br>
      <button type="submit" name="submit">Cetak</button>
    </form><br>
    <?php
      if(isset($_POST["submit"])) {
        $tinggi = $_POST["tinggi"];
        $img = $_POST['img'];
        $i = 1; $j = 1;
        $k = $tinggi;
        while($i <= $tinggi) {
          while($j < $i) {
            echo"<img src='$img' style='width: 25px; opacity: 0'>";
            $j++;
          }
          while($k >= $i) {
            echo"<img src='$img' style='width: 25px'>";
            $k--;
          }
          echo"<br>";
          $j = 1;
          $k = $tinggi;
          $i++;
        }
      }
    ?>
</body>
</html>