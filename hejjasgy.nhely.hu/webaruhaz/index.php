<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héjjas Gyula Webáruháza</title>
</head>
<body>

<?php
$servername = "nhely";
$username = "hejjasgy";
$password = "Szomorufaszxd1";
$dbname = "webaruhaz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Az adatbázishoz kapcsolódtam". "<br>". "<br>";

$sql = "SELECT * FROM `termek` WHERE 1;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"]. " ". $row["termek_neve"]. " ". $row["kategoria"]. " ". $row["termek_ara"]. " ".
            $row["termek_kepe_nagy"]. " ". $row["ternek_kepe_kicsi"]. " ". $row["mennyiseg"]. "<br>";
    }
} else {
    echo "0 talalat";
}

mysqli_close($conn);
?>


</body>
</html>