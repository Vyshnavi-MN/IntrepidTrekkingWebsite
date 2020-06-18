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
 url('https://images.pexels.com/photos/1325140/pexels-photo-1325140.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
<?php
require_once ('db.php');
require_once ('component.php');
$con = createdb();
displayequip();
function displayequip()
{   $sql2 = "select s.user_id from signup s where s.loggedin='yes'";
$result2 = mysqli_query($GLOBALS['con'], $sql2);
if (mysqli_num_rows($result2) > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {

        $user_id = $row2['user_id'];


    }
}
$sql="select * from trekequipments";
$result = mysqli_query($GLOBALS['con'],$sql);
if(mysqli_num_rows($result)>0){?>
<div class="container">
    <div class="row">
        <?php
        while($row=mysqli_fetch_assoc($result))
        {?>
            <div style="padding-bottom: 20px;" class="col-lg-6">
                <div class="card" style="width: 18rem;">


                    <div class="card-body" style="background-color: #2a2f27 ">





                        <img style="height:300px" src="<?php echo $row['equip_image']?>" class="card-img-top" >
                        <h5 class="card-title text-white"><?php echo $row['equipment_name']  ?></h5>
                        <?php
                        //               $name= $row['equipment_name'];
                        //               echo $name;?><!--<br>-->
                        <?php
                        $eid= $row['equipment_id'];
                        $name=$row['equipment_name'];
                        ?>
                        <?php
                        $image=$row['equip_image'];
                        ?>
                        <?php
                        ?>

                        <!--                <img src="--><?php //echo $row['equip_image']?><!--" style="width:300px; height:300px">-->
                        <?php
                        $sql1="select p.amount,p.restrictions,t.equipment_id from trekequipments t,price p where t.equipment_id='$eid' and t.pricecode=p.price_code";
                        $result1 = mysqli_query($GLOBALS['con'],$sql1);
                        if(mysqli_num_rows($result1)>0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $price = $row1['amount'];?>
                                <p class="card-text text-white"> PRICE:  <?php  echo $price;?></p>
                                <p class="card-text text-white"> RESTRICTIONS: <?php  echo $row1['restrictions'];?></p>


                                <!--                      --><?php // echo $price;



                            }}?>

                        <form action="mycart.php?id=<?php echo $eid?>&name=<?php echo $name?>&price=<?php echo $price?>&image=<?php echo $image?>"" method="post">
                            <button name="add"  class="btn btn-primary">ADD TO CART</button>
                        </form>
                    </div>
                </div>
            </div>



            <?php

        }?>
    </div>
</div>
</body>
<?php
}
}
?>