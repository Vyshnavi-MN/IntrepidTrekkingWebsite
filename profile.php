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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="profileStyle.css">
    <title>User Profile</title>
</head>
<style>

#nameDisplay{
    padding-top:40px;
    margin-left:5%;
}
#nameDisplay1{
    margin-left:5%;
    font-size:30px;
    font-weight:bold;
}
</style>

<body style="background-color:#EEDFCC">
    <div class="row">
        <?php
        createData();
        function createData(){


            $sql1 = "select s.username from signup s where s.loggedin='yes'";
            $result1 = mysqli_query($GLOBALS['con'], $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $username = $row1['username'];
                    echo "<h2  id='nameDisplay'>" . 'Profile : '. $username . "</h2>";
                }
                $sql2="SELECT t_id from register r where r.p_name='$username' ";
                $result2 = $GLOBALS['con']->query($sql2);

                if ($result2->num_rows > 0) {
                    // output data of each row
                    while ($row = $result2->fetch_assoc()) {?>
                        <?php
                        $a = $row["t_id"];
                        ?>
                        <div id='nameDisplay1'>Treks Registered!</div>
                        <?php
                        $sql3="SELECT trek_name,trek_place,trek_img1 from trek t  where t.trek_id= $a";
                        $result3 = $GLOBALS['con']->query($sql3);
                        if ($result3->num_rows > 0){
                        while ($row3 = $result3->fetch_assoc()) {{?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3">
                                <div class="col-md-3 col-sm-6">
                                    <div class="img-thumbnail">

                                        <img src="<?php echo $row3['trek_img1']?>" style="width:300px; height:300px">
                                    </div>
                                    <?php
                                    echo "<p>" . $row3['trek_name'] . "</p>";?>
                                </div></div>
                                </div>
                        </div>
                        <?php
                        }}
                        }
                    }

                }
                else{
                    echo "<div id='nameDisplay1'>" . 'No Treks Registered!' . "</div>";
                }
            }
        }
        ?>
    </div>
</body>

