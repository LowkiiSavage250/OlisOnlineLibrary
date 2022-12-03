<!DOCTYPE html>
<html>
<head>
  <style>
    <?php include 'Booksstyle.css'; ?>
  </style>
</head>
<body>
  <div class="sidenavbar">
    <a href="index.html">HomePage</a><br>
    <a href="DisplayClients.php">Clients</a><br>
    <a href="DisplayBooks.php">Books</a>
    <a href="DeleteBooks.html">Delete Books</a>
    <a href="InsertBooks.html">Insert Books</a>
    <a href="UpdateBooks.html">Update Books</a><br>
    <a href="DisplayReservations.php">Reservations</a><br>
  </div>

  <p class="paragraph">A List Of All Books</p><br>

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

    $sql = "SELECT bookNo, title, author, year, price FROM Books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
      echo "<table><tr><th>BookNo</th><th>Title</th><th>Author</th><th>Year</th><th>Price</th></tr>";
      while($row = $result->fetch_assoc()) 
      {    
       echo "<tr><td>$row[bookNo]</td><td>$row[title]</td><td>$row[author]</td><td>$row[year]</td><td>$row[price]</td></tr>";
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