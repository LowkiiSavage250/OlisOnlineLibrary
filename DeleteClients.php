<!DOCTYPE html>
<html>
<head>
	<style>
		<?php include 'Clientsstyle.css'; ?>
	</style>
</head>
<body>
	<div class="sidenavbar">
		<a href="DisplayClients.php">Clients</a>
		<a href="DeleteClients.html">Delete Clients</a>
		<a href="InsertClients.html">Insert Clients</a>
		<a href="UpdateClients.html">Update Clients</a><br>
		<a href="DisplayBooks.php">Books</a><br>
		<a href="DisplayReservations.php">Reservations</a><br>
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
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$clientNo = $_POST["clientNo"];
		$sql1 = "SELECT clientNo, name, age, email FROM Clients WHERE clientNo = '$clientNo'";
		$result1 = $conn->query($sql1);

		if ($result1->num_rows > 0) {	  
			$sql2 = "DELETE FROM Clients WHERE clientNo = '$clientNo'";
			$result2 = $conn->query($sql2);
			
			$row = $result1->fetch_row();	
			echo "<b>The client below was deleted successfully:</b> <br><br>ClientNo: " .$row[0]. 
			" <br> Name: $row[1] <br> Age: $row[2] <br> Email: $row[3] <br>";	 
		} else {
			echo "Client does not exist!";
		}

		$conn->close();
		?>
	</div>
</body>
</html>