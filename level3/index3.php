<!DOCTYPE html>
<html>
<head>
	<title>Mengecek segitiga</title>
</head>
<body>
	<h2>Masukkan 3 angka untuk mengecek jenis Segitiga:</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="sisi1">Sisi 1:</label>
		<input type="number" name="sisi1" required><br><br>
		<label for="sisi2">Sisi 2:</label>
		<input type="number" name="sisi2" required><br><br>
		<label for="sisi3">Sisi 3:</label>
		<input type="number" name="sisi3" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$sisi1 = $_POST["sisi1"];
			$sisi2 = $_POST["sisi2"];
			$sisi3 = $_POST["sisi3"];

			if ($sisi1 + $sisi2 > $sisi3 && $sisi2 + $sisi3 > $sisi1 && $sisi1 + $sisi3 > $sisi2) {
				echo "Sisi $sisi1, $sisi2, dan $sisi3 bisa membentuk sebuah sefitiga dan jenisnya adalah :.<br><br>";
				if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
					echo "Ini adalah Segitiga Sama Sisi.";
				} else if ($sisi1 == $sisi2 || $sisi2 == $sisi3 || $sisi1 == $sisi3) {
					echo "Ini adalah Segitiga Sama Kaki.";
				} else {
					echo "Ini adalah Segitiga Sembarang.";
				}
			}
		}
	?>

    <p><a href="index2.php">Level Sebelumnya</a></p>	
</body>
</html>