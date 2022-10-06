<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webaruhaz";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Kapcsolódási hiba: " . mysqli_connect_error());
}
?>