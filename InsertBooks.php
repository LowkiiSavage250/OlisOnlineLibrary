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

      $bookNo = $_POST["bookNo"];
      $title = $_POST["title"];
      $author = $_POST["author"];
      $year = $_POST["year"];
      $price = $_POST["price"];

      $sql = "INSERT INTO Books (bookNo, title, author, year, price)
      VALUES ('$bookNo', '$title', '$author', '$year', '$price')";

      if ($conn->query($sql) === TRUE) 
      {
        echo "New record inserted successfully";
      } 
      else
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    ?>
  </div>
</body>
</html>
