<!DOCTYPE html>
<html>
<head>
  <style>
    <?php include 'Clientsstyle.css'; ?>
  </style>
</head>
<body>
  <div class="sidenavbar">
    <a href="index.html">HomePage</a><br>
    <a href="DisplayClients.php">Clients</a>
    <a href="DeleteClients.html">Delete Clients</a>
    <a href="InsertClients.html">Insert Clients</a>
    <a href="UpdateClients.html">Update Clients</a><br>
    <a href="DisplayBooks.php">Books</a><br>
    <a href="DisplayReservations.php">Reservations</a><br>
  </div>

  <p class="paragraph">A List Of All Clients</p><br>

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

      $sql = "SELECT clientNo, name, age, email FROM Clients";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) 
      {
        echo "<table><tr><th>ClientNo</th><th>Name</th><th>Age</th><th>Email</th></tr>";
          while($row = $result->fetch_assoc()) 
          {    
            echo "<tr><td>$row[clientNo]</td><td>$row[name]</td><td>$row[age]</td><td>$row[email]</td></tr>";
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