<?php
$servername = "localhost";
$username = "hejjasgyula";
$password = "Egyalmafa2";
$dbname = "hejjasgyula";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Kapcsolódási hiba: " . mysqli_connect_error());
}
?>