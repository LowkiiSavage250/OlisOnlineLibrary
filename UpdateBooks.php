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

      $sql = "Select bookNo, title, author, year, price From Books Where bookNo = '$
      bookNo'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0)
      {
        $sql = "UPDATE Books SET title = '$title', author = '$author', year = '$year', price = '$price' WHERE bookNo = '$bookNo'";
        $result = $conn->query($sql);
        echo "Record updated successfully"; 
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
