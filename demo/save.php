<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT room_no,satus FROM room";
$result = $conn->query($sql);
if ($result->num_rows > 0)
	 while($row = $result->fetch_assoc()) {
        if(isset($_POST['abc'.$row["room_no"]]))
		{
			$sq="UPDATE room SET satus=1 WHERE room_no='$row[room_no]'";
			if ($conn->query($sq) === TRUE){
				header('Location:first.html');
			}
		}
	 }
}

$conn->close();
?>
