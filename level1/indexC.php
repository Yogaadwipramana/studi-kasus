<?php
$a ;
$b ;
$c ;
$d ;

if(isset($_POST["submit"])) {
    $a = $_POST["bil1"];
    $b = $_POST["bil2"];
    $c = $_POST["bil3"];
    $d = $_POST["bil4"];

if( $a > $b ) {
       if ( $a > $c ) {

        if($a > $d) {
            echo  "max ".$a;
        } else {
            echo "max ".$d;
        }
       } else {
            echo "max ".$c;
       }
    } elseif ( $b > $c ) {
        if ($b > $d){
            echo "max ".$b;
        } else {
            echo "max ".$d;
        }
    } else {
        if($c > $d ){
            echo "max ".$c;
        } else {
           echo "max ".$d;
     }
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
    <label bil="">4</label>
    <input type = "number" name = "bil4">
    <button type = "submit" name = "submit">Submit</button>

</form>
<p><a href="indexB.php">Level Sebelumnya</a></p>	
</body>