<?php
$conn = mysql_connect('172.26.0.2', 'root', 'bebasaja');
mysql_select_db('Trucorp');

$result = mysqli_query($conn, "SELECT COUNT(*) as count
          FROM users");

$row = mysqli_fetch_array($result);

$var = $row['count'];

echo "There are currently " .$var. " users.";

mysql_close(); 
?>
