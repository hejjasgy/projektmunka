<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Héjjas Gyula webáruháza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="p-5 bg-primary text-white text-center">
    <h1>Héjjas Gyula</h1>
    <p>Kollár Sándor, Braczkó Tamás, Mecsei Péter</p>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " href="index.php">Minden termék</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="energiaitalok.php">Energiaitalok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ecigorettakitek.php">E-cigoretták</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="alkoholok.php">Alkoholok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cigarettak.php">Cigaretták</a>
        </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<table class="table table-striped">
<br>
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

$sql = "SELECT * FROM termek WHERE kategoria = 'energiaital'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<tr>";
  
  echo 
   "<th>ID</th>" .
   "<th>Termék neve</th> ".
   "<th>Kategória</th> " .
   "<th>Termék ára </th>" .
   //"<th>Termék képe nagy</th> " .
   "<th>Foto</th>". 
   "<th>Mennyiség </th>";

   echo "</tr>";


  while($row = mysqli_fetch_assoc($result)) {
  
    echo "<tr>" ;

    echo "<td>" .$row["id"]. "</td>" .
     "<td>" .$row["termek_neve"]."</td>" .
     "<td>" .$row["kategoria"]."</td>" .
     "<td>" .$row["termek_ara"]."</td>" ;

      print("<td><img src=\"fotok/$row[termek_kepe_nagy]\" alt=\"\" style=\"height:200px;width:300px;\" class=\"img-fluid\" style=\"max-width=\"300\"\"></td>");

	 
     //"<td>" .$row["termek_kepe_nagy"]."</td>" .
     
	 //"<td>" .$row["termek_kepe_kicsi"]."</td>" .
	 
     echo "<td>" .$row["mennyiseg"]."</td>" ;
     echo "</tr>" ;

  }
} else {
  echo "0 találat";
}

mysqli_close($conn);
?>

</table>
</div>


<div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Készítette: Héjjas Gyula 2022</p>
</div>
</body>

<html>

<!--:3-->