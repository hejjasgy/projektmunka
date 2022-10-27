<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Héjjas Gyula webáruháza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="fotok/logosz.png">
</head>
<body style="color:#131313; background-color: #DADADA;">

<?php include 'header.php';?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Üdvözlő</a>
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
                <a class="nav-link" href="alkoholok.php">Alkoholok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cigarettak.php">Cigaretták</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
<div style="display: flex; height: 60vh; align-items: center; justify-content: center; text-align: center;">
    <div style="margin-top: 50px;">
        <h1>Üdv itt a Weeb áruházban!</h1>
        <img src="fotok/logosz.png" style="height: 500px;"> <br>
        <h5>Válogass kedvedre!</h5>
    </div>
</div>
</div>


<div id="cookie-alert" style="position: fixed;color:white; text-align: center; height: 100vh; top:0; margin: auto; width:100%; background-color: rgba(0,0,0,0.9)">
    <div style="margin-top: 20px;">
        <span>A weebáruházunk cookiekat használ.<br></span>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Tudj meg többet itt!<i class="fa fa-angle-right ml-2"></i></a>
        <div class="mt-4">
            <button class="btn btn-light btn-sm" type="button" onclick="enableCookies();">Elfogadom</button>
        </div>
    </div>
</div>

<script>
    checkCookie()
    function checkCookie() {
        var cookieAlert = document.getElementById("cookie-alert");
        let decodedCookie = decodeURIComponent(document.cookie);
        let cookie = decodedCookie.split(";")[0].startsWith("cookie");
        if (cookie == true) {
            cookieAlert.style.display = "none"
            cookieAlert.style.height = "0px";
            cookieAlert.style.opacity = "0";
            console.log(cookie)
        }else{
            cookieAlert.style.display = "block";
            console.log(cookie)
        }
    }

    function enableCookies(){
        document.cookie = 'cookie=elfogadva;path=/';
        checkCookie()
    }

</script>

<?php include 'footer.php';?>


</body>

<html>