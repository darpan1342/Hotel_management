<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HMS</title>
  <link rel="shortcut icon" href="media/icon.jpg">
  <meta name="description" content="hotel management">
  <meta name="author" content="BURNED QUATER BACK" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/free1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<table cellspacing='20'><tr><th>ROOM NO.</th><th>Status</th><th></th></tr>";
$sql = "SELECT room_no,satus FROM room";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        if($row["satus"]==0)
	{
	    echo"<tr><td>".$row["room_no"]."</td><td>AVAILABLE</td><td> <input type='checkbox' name='abc".$row["room_no"]."'></td></tr>";
	}
  if($row["satus"]==1)
{
echo"<tr><td>".$row["room_no"]."</td><td>BOOKED</td></tr>";
}
    }
echo "</table>";
$conn->close();
?>
<form method="post" action="save.php">
  <input type="submit" value="GO">
</form>
</body>
</html>
