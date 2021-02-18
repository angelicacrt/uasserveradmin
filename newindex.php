<?php
$ipnet="172.26.0.2";
$username="root";
$password="bebasaja";
$db = "Trucorp";
$dbh = new PDO($ipnet, $db, $username, $password);
foreach($dbh->query('SELECT COUNT(*) FROM users') as $row) {
echo "<tr>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
