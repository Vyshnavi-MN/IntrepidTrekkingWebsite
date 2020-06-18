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

$con=createdb();

createData();
function createData()
{
    $trekid = $_GET['trekid'];
    $name=textboxValue("Name");
    $mobile=textboxValue("Telephone");
    $email=textboxValue("EMail");
    $age = textboxValue("age");
    $blg=textboxValue("blood_group");
    $dob=textboxValue("DOB");
    $sql = "
INSERT INTO register(p_name,p_phone,p_email,p_age,p_bloodg,p_dob,t_id) values('$name','$mobile','$email','$age','$blg','$dob','$trekid')
";
    if(mysqli_query($GLOBALS['con'],$sql)){
        echo "inserted";
    };

    $sql1 = "SELECT guide_name,location_pick , trek_id from guide g, trek d where d.trek_id='$trekid' and g.t_id='$trekid'";


//    $result =mysqli_query($GLOBALS['con'],$sql1);
//    while($row = mysqli_fetch_array($result)) {
//         // Print a single column data
//        echo print_r($row);       // Print the entire row data
//    }

    $result = $GLOBALS['con']->query($sql1);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {?>
        <h1> <?php  echo "This particular guide named ".$row["guide_name"];
            echo " will lead you through out the trek from ".$row["location_pick"] ?></h1>
<?php
        }
    }
}
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    return $textbox;
}


?>
<!DOCTYPE html>
<html >
<style>
    body{
        background:#333 url("https://github.com/Vyshnavi2000/WebProject/blob/master/images/indexbackground.jpg?raw=true") ;
        background-repeat:no-repeat;
        height: 100%;
        background-size:cover;
    <!--background-position: center;-->
        font-family:Arial;
    }
</style>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>submitted</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;	}
        .wrapper{ width: 350px; padding: 20px; background-color: white;
            width: 400px;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%); }
    </style>
</head>
<body>

<!--<div class="wrapper">-->
<div class="container">
    <div class="box">
        <h1 align="center" >Submitted successfully!!!</h1>
        <p align="center" style="color:black">Please wait for our response.Thank you.</p>
    </div>
</div>