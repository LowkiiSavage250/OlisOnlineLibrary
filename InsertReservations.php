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

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      }

      $bookNo = $_POST["bookNo"];
      $clientNo = $_POST["clientNo"];
      $dateOut = $_POST["dateOut"];
      $dateDue = $_POST["dateDue"];

      $sql = "INSERT INTO Reservations (bookNo, clientNo, dateOut, dateDue)
      VALUES ('$bookNo', '$clientNo', '$dateOut', '$dateDue')";

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
