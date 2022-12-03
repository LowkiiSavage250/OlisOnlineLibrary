<!DOCTYPE html>
<html>
<head>
	<style>
		<?php include 'Booksstyle.css'; ?>
	</style>
</head>
<body>
	<div class="sidenavbar">
		<a href="DisplayClients.php">Clients</a><br>
		<a href="DisplayBooks.php">Books</a>
		<a href="DeleteBooks.html">Delete Books</a>
		<a href="InsertBooks.html">Insert Books</a>
		<a href="UpdateBooks.html">Update Books</a><br>
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
		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

		$bookNo = $_POST["bookNo"];
		$sql1 = "SELECT bookNo, title, author, year, price FROM Books WHERE bookNo = '$bookNo'";
		$result1 = $conn->query($sql1);

		if ($result1->num_rows > 0)
		{	  
			$sql2 = "DELETE FROM Books WHERE bookNo = '$bookNo'";
			$result2 = $conn->query($sql2);
			
			$row = $result1->fetch_row();	
			echo "<b>The book below was deleted successfully:</b> <br><br>BookNo: " .$row[0]. 
			" <br> Title: $row[1] <br> Author: $row[2] <br> Year: $row[3] <br> Price: $row[4] <br>";	 
		} 
		else 
		{
			echo "Book does not exist!";
		}

		$conn->close();
		?>
	</div>
</body>
</html>