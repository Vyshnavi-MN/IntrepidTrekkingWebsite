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
require_once ('db.php');
require_once ('component.php');
$con = createdb();
if(isset($_POST['ladakh'])){
    ladakh();
};
if(isset($_POST['kashmir'])){
    kashmir();
};
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    #mountain{
        background-image: url("https://images.pexels.com/photos/2450296/pexels-photo-2450296.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-size: cover;
    }
    #mountain-kashmir{
        background-image: url("https://live.staticflickr.com/826/40952405465_5eca838d6f_b.jpg");
        background-size: cover;
    }
    .btn-info{
        margin-left:30px;
        margin-right:10px;
        margin-bottom:20px;
        font-size:25;
        font-family: 'Comic Neue', cursive;
        color:#EEDFCC
    }
    .img-thumbnail{
        margin-left:30px;
        margin-right:10px;
        transition: 0.5s ease;
        cursor: pointer;
        margin-top:15px;
    }
    .img-thumbnail:hover{
        transform: scale(1.2);
        box-shadow:5px 5px 15px rgba(0,0,0,0.9);
    }
    .container{
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
    }
    .col-md-3{
        border-radius:18px;
    }
    

</style>

<body style="background-color:#212121">
    <?php function ladakh(){?>
    <div id="mountain">
        <img style="padding-top: 45%">
    </div>
<h2 class="text-center" style="padding-top:20px;font-family: 'Merriweather', serif;color:#009ACD;">
    Trekking in Ladakh
</h1>
<p class="text-center" style="color:#EEDFCC">
    Come, be a part of these thrilling trekking adventures in Ladakh, a rich land that offers barren places, tapestry monastery, great mountain kingdoms and exotic flora and fauna in a spectacular way. Explore our tailor-made itineraries that will lead you to beautiful wonders of nature and point out interesting spots in Ladakh you don't want to miss. Book your Ladakh adventure trekking holidays at best prices and services.
</p>
<br>

<DIV id="bgcolour">
<div class="container">
    <div class="row text-center" style='display:flex'>
        <?php
        $sql ="select * from trek";
        $result = mysqli_query($GLOBALS['con'],$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){

                if ($row['trek_place']=='Ladakh') {?>
                    <form method="post" action="trekinfo.php?trekid=<?php echo $row['trek_id'];?>">
                    <div class="col-md-3 col-sm-6">
                        <div class="img-thumbnail">

                            <img src="<?php echo $row['trek_img1']?>" style="width:300px; height:300px">
                        </div>
                    <?php
                        buttonElement('btn-info',$row['trek_name'],$row['trek_id']);?>
                        <div class="caption"><?php echo $row['trek_duration'];?></div>
                    </div>
                    </form>
                    <?php }
            }
        }?>
    </div>
</div>
</DIV>
    <?php
}
?>

<?php function kashmir(){?>
    <div id="mountain-kashmir">
        <img style="padding-top: 45%">
    </div>
<h2 class="text-center" style="padding-top:20px;font-family: 'Merriweather', serif;color:#009ACD;">
    Trekking in Kashmir
</h1>
<p class="text-center" style="color:#EEDFCC">
    Come, be a part of these thrilling trekking adventures in Kashmir, a rich land that offers barren places, tapestry monastery, great mountain kingdoms and exotic flora and fauna in a spectacular way. Explore our tailor-made itineraries that will lead you to beautiful wonders of nature and point out interesting spots in Ladakh you don't want to miss. Book your Ladakh adventure trekking holidays at best prices and services.
</p>
<br>


<DIV id="bgcolour">
<div class="container">
    <div class="row text-center" style='display:flex'>
        <?php
        $sql ="select * from trek";
        $result = mysqli_query($GLOBALS['con'],$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){

                if ($row['trek_place']=='Kashmir') {?>
                    <form method="post" action="trekinfo.php?trekid=<?php echo $row['trek_id'];?>">
                    <div class="col-md-3 col-sm-6">
                        <div class="img-thumbnail">

                            <img src="<?php echo $row['trek_img1']?>" style="width:300px; height:300px">
                        </div>
                    <?php
                        buttonElement('btn-info',$row['trek_name'],$row['trek_id']);?>
                        <div class="caption"><?php echo $row['trek_duration'];?></div>
                    </div>
                    </form>
                    <?php }
            }
        }?>
    </div>
</div>
</DIV>
    <?php
}
?>
</body>
</html>
