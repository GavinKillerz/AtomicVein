

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$offer = $_POST['eth69'] . ' ETH';
$gay = 0;
$gaynon = 1;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE ethoffer (
  Price VARCHAR(500),
  USD VARCHAR(500),
  Superidol VARCHAR(500),
  Expiration VARCHAR(500),
  Previous VARCHAR(500),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if($offer >= 7.33){
  ?>
  <html>
  <form id="form" action="itempage2.php" method="POST">
  <input type="hidden" name="gay" value="<?php echo $gaynon ?>">
  </form>
  <script>
  document.getElementById("form").submit();
  </script>
  </html>
  <?php
  echo '<script>alert("Welcome to Geeks for Geeks")</script>';
  }



if($offer < 7.33){
    ?>
<html>
<form id="form" action="itempage2.php" method="POST">
<input type="hidden" name="gay" value="<?php echo $gay ?>">
</form>
</form>
<script>
document.getElementById("form").submit();
</script>
</html>
<?php 
}


if($offer < 7.33){
  $usd = '$' . $offer * 4000;
  $percent = (1 - ($offer /7.33)) * 100;
  $roundpercent = round($percent,2) . '% Below';
  $sql = "INSERT INTO ethoffer (Price,USD,Superidol,Expiration,Previous) VALUES ('$offer','$usd','$roundpercent','in 20 hours','ChadSquid')";
  header("Location:./itempage2.php");
}  



if ($conn->query($sql) === TRUE) {
  echo $offer;
} else {
}

$conn->close();
?>