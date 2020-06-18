<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="treks.php">Upcoming treks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="equipment1.php">Trek Equipments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="profile.php">My profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="mycart.php">My cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Log out</a>
            </li>

        </ul>

    </div>
</nav>
<?php
require_once('operation.php');
require_once('component.php');
?>
<html>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container">
<form method="post" action="trekk.php" >
    <h1 CLASS=" text-info text-center" style="padding-top:35px">INTREPID TREKKERS!</h1>

    <h5 class="text-center text" style="padding-left: 50px;padding-right: 50px;font-family: 'Comic Neue', cursive;">Discover our selection of trekking tours and other adventure sports activities in different places all over India! <br>Book your adventure trekking holidays at best prices and services.</h5>
    <br>
    <br><br>
    <h4 style="padding-left:30px;font-family: 'Comic Neue', bold;">Check out our upcoming treks...</h4>
    <br>
    <?php
        buttonElement("btn-lg btn-info","Ladakh","ladakh");
        buttonElement("btn-lg btn-info","Kashmir","kashmir");
        buttonElement("btn-lg btn-info","Himachal Pradesh","hp");
        buttonElement("btn-lg btn-info","Uttarkhand","uttarkhand");
    ?>
</form>
</div>
<style>
    body{
        background-image: url("https://images.pexels.com/photos/2695232/pexels-photo-2695232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .btn-lg{
        margin-left:30px;
        margin-right:10px;
        margin-bottom:20px;
        height:2cm;
        font-size:25;
        font-family: 'Comic Neue', cursive;
    }

</style>
</body>
</html>