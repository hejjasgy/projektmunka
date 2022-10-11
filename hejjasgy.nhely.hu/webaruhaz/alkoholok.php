<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Héjjas Gyula webáruháza</title>
    <link href="../bootsrap/bootstrap.min.css" rel="stylesheet">
    <script src="../bootsrap/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="fotok/logosz.png">

</head>
<body style="color:#131313; background-color: #DADADA;">

<?php include 'header.php';?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Üdvözlő</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kinalat.php">Minden termék</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="energiaitalok.php">Energiaitalok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ecigorettakitek.php">E-cigaretták</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="alkoholok.php">Alkoholok</a>
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
$sql = "SELECT * FROM termek WHERE kategoria = 'alkohol'";
$result = mysqli_query($conn, $sql);

$sorszam = 1;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<tr>";

    echo
        "<th>#</th>" .
        "<th>Foto</th>".
        "<th>Termék neve</th> ".
        "<th>Kategória</th> " .
        "<th>Termék ára </th>" .
        //"<th>Termék képe nagy</th> " .
        "<th>Mennyiség </th>";

    echo "</tr>";


    while($row = mysqli_fetch_assoc($result)) {

        echo "<tr>" ;

        echo "<td>" .$sorszam. "</td>" .
            "<td style='vertical-align: center;'><img src=\"fotok/$row[termek_kepe_nagy]\" alt=\"\" style=\"margin-left:30px; height:200px;\" class=\"img-fluid\" style=\"max-width=\"300\"\"></td>" .
            "<td>" .$row["termek_neve"]."</td>" .
            "<td>" .$row["kategoria"]."</td>" .
            "<td>" .$row["termek_ara"]."</td>" ;

        $sorszam++;




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