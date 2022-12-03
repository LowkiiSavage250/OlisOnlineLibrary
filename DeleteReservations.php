<!DOCTYPE html>
<html>
<head>
	<style>
		<?php include 'Reservationsstyle.css'; ?>
	</style>
</head>
<body>
	<div class="sidenavbar">
	  <a href="index.html">HomePage</a><br>
	  <a href="DisplayClients.php">Clients</a><br>
	  <a href="DisplayBooks.php">Books</a><br>
	  <a href="DisplayReservations.php">Reservations</a>
	  <a href="DeleteReservations.html">Delete Reservations</a>
	  <a href="InsertReservations.html">Insert Reservations</a>
	  <a href="UpdateReservations.html">Update Reservations</a><br>
	</div>
	<div class="body-text">
		<?php
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "Oli's Library";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

		$bookNo = $_POST["bookNo"];
		$dateOut = $_POST["dateOut"];

		$sql1 = "SELECT bookNo, clientNo, dateOut, dateDue FROM Reservations WHERE bookNo = '$bookNo' and dateOut = '$dateOut'";
		$result1 = $conn->query($sql1);

		if ($result1->num_rows > 0)
		{	  
			$sql2 = "DELETE FROM Reservations WHERE bookNo = '$bookNo'";
			$result2 = $conn->query($sql2);
			
			$row = $result1->fetch_row();	
			echo "<b>The Reservation below was deleted successfully:</b> <br><br>BookNo: " .$row[0]. 
			" <br> ClientNo: $row[1] <br> dateOut: $row[2] <br> dateDue: $row[3] <br>";	 
		} 
		else 
		{
			echo "Reservation does not exist!";
		}

		$conn->close();
		?>
	</div>
</body>
</html>