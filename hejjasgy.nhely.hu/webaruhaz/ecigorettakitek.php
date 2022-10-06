<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Héjjas Gyula webáruháza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><?php include 'header.php';?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " href="index.php">Minden termék</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="energiaitalok.php">Energiaitalok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="ecigorettakitek.php">E-cigaretták</a>
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

<?php include 'kapcsolatok.php'?>

<?php
$sql = "SELECT * FROM termek WHERE kategoria = 'ecigarettakit'";
$result = mysqli_query($conn, $sql);

$sorszam = 1;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<tr>";

    echo
        "<th>#</th>" .
        "<th>Termék neve</th> ".
        "<th>Kategória</th> " .
        "<th>Termék ára </th>" .
        //"<th>Termék képe nagy</th> " .
        "<th>Foto</th>".
        "<th>Mennyiség </th>";

    echo "</tr>";


    while($row = mysqli_fetch_assoc($result)) {

        echo "<tr>" ;

        echo "<td>" .$sorszam. "</td>" .
            "<td>" .$row["termek_neve"]."</td>" .
            "<td>" .$row["kategoria"]."</td>" .
            "<td>" .$row["termek_ara"]."</td>" ;

        $sorszam++;

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

<?php include 'footer.php';?>

</body>

<html>