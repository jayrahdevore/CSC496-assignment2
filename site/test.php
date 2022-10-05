<?php

// echo "Trying...";
$servername = getenv("DB_SERVER");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");
$dbname = "people";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT id, firstname, lastname FROM guests";
$result = mysqli_query($conn, $sql);

echo "My Guests:<br>";

echo "<table><tr><th>ID</th><th>Last</th><th>First</th></tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["firstname"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";

 ?> 
