<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CONNECT DATABASE ---
 *
 * Using MySQLi
 *
 */

echo "<h1>1. CONNECT DATABASE</h1>";

/*
 * EXERCISE 1 : Do the connect to your database. Remember close the connect before quit.
 *
 */


$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);

if (!$conn) {
die("Connection failed : " . mysqli_connect_error());
}
echo "Connected successfully -Ket noi thanh cong !";
$conn->close();
 

//echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
