<?php
// Create connection
$ipnet = "172.26.0.2";
$username = "root";
$password = "bebasaja";
$dbname = "Trucorp";

$conn = new mysqli($ipnet, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Nama, Kantor FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Nama"]. " - Kantor: " . $row["Kantor"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
