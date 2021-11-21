

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$offer = $_POST['eth69'] . ' ETH';
$usd = '$' . $offer * 4000;
$percent = (1 - ($offer /7.33)) * 100;
$roundpercent = round($percent,2) . '% Below';



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($offer < 7.33){
    $sql = "INSERT INTO ethoffer (Price,USD,Superidol,Expiration,Previous) VALUES ('$offer','$usd','$roundpercent','in 20 hours','ChadSquid')";
    header("Location:./itempage2.php");
}else if($offer >= 7.33){
    $sql = "INSERT INTO ethoffer (Price,USD,Superidol,Expiration,Previous) VALUES ('$offer','$usd','$roundpercent','in 20 hours in your dick','ChadSquid')";
    header("Location:./itempage2.php");
}


if ($conn->query($sql) === TRUE) {
  echo $offer;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>