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

  <p class="paragraph">A List Of All Reservations</p><br>

  <div class="body-text">
    <?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "Oli's Library";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT b.title, c.name, r.dateOut, r.dateDue from Books b, Clients c, Reservations r where r.clientNo = c.clientNo and r.bookNo = b.bookNo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
      echo "<table><tr><th>BookName</th><th>ClientName</th><th>DateOut</th><th>DateDue</th></tr>";
      while($row = $result->fetch_assoc()) 
      {    
       echo "<tr><td>$row[title]</td><td>$row[name]</td><td>$row[dateOut]</td><td>$row[dateDue]</td></tr>";
     }
     echo "</table>";
   } 
   else
   {
    echo "0 results";
  }
  $conn->close();
  ?>
</div>
</body>
</html>