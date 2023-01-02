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

      $clientNo = $_POST["clientNo"];
      $name = $_POST["name"];
      $age = $_POST["age"];
      $email = $_POST["email"];

      $sql = "Select clientNo, name, age, email From Clients Where clientNo = '$clientNo'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0)
      {
        $sql = "UPDATE Clients SET clientNo = '$clientNo', name = '$name', age = '$age', email = '$email' WHERE clientNo = '$clientNo'";
        $result = $conn->query($sql);
        echo "Record updated successfully"; 
      } 
      else 
      {
        echo "Client does not exist!";
      }
      $conn->close();
    ?>
  </div>
</body>
</html>
