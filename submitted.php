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

    $sql1 = "SELECT guide_name,locationpick,place from guide g, destination d where d.guide_id=g.guide_id and d.pid='$trekid'";


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
            echo "Will lead you through out the trek from ".$row["locationpick"] ?>"<br>";</h1>
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