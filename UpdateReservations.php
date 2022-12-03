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

      $sql = "Select bookNo, clientNo, dateOut, dateDue From Reservations Where bookNo = '$
      bookNo'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0)
      {
        $sql = "UPDATE Reservations SET dateDue = '$dateDue' WHERE bookNo = '$bookNo' AND clientNo = '$clientNo' AND dateOut = '$dateOut'";
        $result = $conn->query($sql);
        echo "Record updated successfully"; 
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
