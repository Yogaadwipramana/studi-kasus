<?php

$a;
$b;
$c;
$d;

if(isset($_POST["submit"])) {
    $a = $_POST["bil1"];
    $b = $_POST["bil2"];
    $c = $_POST["bil3"];


if( $a > $b ) {
    if ( $a > $c) {
        echo "max ". $a;
    }
    else {
        echo "max ". $b;
    }
}
elseif ( $b > $c ){
        echo "max ". $c;
    }
    else {
        echo "max".$b;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mencari Bilangan Terbesar</h2>
    <form action="#" method="post">
    <label bil="">1</label>
    <input type = "number" name = "bil1">
    <label bil="">2</label>
    <input type = "number" name = "bil2">
    <label bil="">3</label>
    <input type = "number" name = "bil3">
    <button type = "submit" name = "submit">Submit</button>

</form>
<p><a href="indexC.php">Level Sebelanjutnya</a></p>	
<p><a href="indexA.php">Level Sebelumnya</a></p>	
</body>
</html