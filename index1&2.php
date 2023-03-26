<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>
  tugas 2 A B
</h2>

<?php
$angkas = array();
for ($i = 0; $i < 100; $i++) {
  $angkas[] = rand(0, 100);
}

echo "Angka nya adalah:<br>";
foreach ($angkas as $angka) {
  echo $angka . ", ";
  
}

echo "<br>";

echo "<br>Nilai terbesar adalah : " .max($angkas)."<br>";
?>

<br><br>
<!-- <a href="1C.php">level sebelumnya</a><br>
<a href="2B.php">next level cuyy</a> -->

</body>
</html>
