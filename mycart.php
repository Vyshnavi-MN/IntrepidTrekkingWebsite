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

        </ul>

    </div>
</nav>
<body style="background-image:
        url('https://images.pexels.com/photos/688660/pexels-photo-688660.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');background-size: cover">
<?php
require_once ('db.php');
require_once ('component.php');
$con = createdb();
if(isset($_POST['add'])){
    additem();
}
display();


function additem()
{


    $id = $_GET['id'];
//    echo $id;
    $name = $_GET['name'];
//    echo $name;
    $price = $_GET['price'];
//    echo $price;
    $image = $_GET['image'];
//    echo $image;
    $sql1 = "select s.user_id from signup s where s.loggedin='yes'";
    $result1 = mysqli_query($GLOBALS['con'], $sql1);
    if (mysqli_num_rows($result1) > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $userid = $row1['user_id'];
        }
    }


    $sql2 = "insert into mycart values('$userid','$id','$name','$price','$image') ";
    if (mysqli_query($GLOBALS['con'], $sql2)) {
        echo "inserted";
    }
}
function display()
{


    $sql11 = "select s.user_id from signup s where s.loggedin='yes'";
    $result11 = mysqli_query($GLOBALS['con'], $sql11);
    if (mysqli_num_rows($result11) > 0) {
        while ($row11 = mysqli_fetch_assoc($result11)) {
            $userid = $row11['user_id'];
        }
    }?>
    <div class="container">
            <div class="row">
    <?php
    $sql3="select equip_name,price,count(*),image from mycart where userid='$userid'group by equip_id";
    $result3 = mysqli_query($GLOBALS['con'], $sql3);
    if (mysqli_num_rows($result3) > 0) {?>
    <div style="padding-bottom: 20px;" class="col-lg-6">
    <div class="card" style="width: 18rem;">


    <div class="card-body" style="background-color: #2a2f27 ">
            <?php
        while ($row3 = mysqli_fetch_assoc($result3)) {?>


            <img style="height:300px" src="<?php echo $row3['image']?>" class="card-img-top" >


            <h5 class="card-title text-white"><?php echo $row3['equip_name']  ?></h5>
            <p class="card-text text-white"> PRICE:  <?php  echo $row3['price'];?></p>
            <p class="card-text text-white"> NUMBER:  <?php  echo $row3['count(*)'];?></p>

<?php


        }
    }?>
     </div>
    </div>
    </div>
            </div>
    </div>
<?php
    $sql4="SELECT SUM(price) from mycart where userid='$userid'" ;


    $result4 = mysqli_query($GLOBALS['con'], $sql4);
    if(mysqli_num_rows($result4) > 0) {
        while ($row4 = mysqli_fetch_assoc($result4)){?>
            <div style="background-color: darkorange">
                <?php echo "Total price of the equipments selected:";?>
           <p class="card-text "> PRICE:  <?php  echo $row4['SUM(price)'];?></p>

            </div>
<?php
        }
    }?>

</body>

<?php

}