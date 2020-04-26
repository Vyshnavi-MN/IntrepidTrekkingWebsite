<?php

session_start();

$con=mysqli_connect('localhost','root','','intrepidtrekkers');
$name=$_POST['username'];
$pass=$_POST['psw'];
$confirm_pass=$_POST['confirm_password'];

$num = mysqli_num_rows($result);
if($num==1){
    echo '<script type="text/javascript">
          window.onload = function () { alert("Username Already Taken"); }
        </script>';
    header('location:register.php');
}
else{
    $reg = "INSERT INTO `signup` (`username`, `password`, `confirm_pass`) VALUES ('$name', '$pass', '$confirm_pass')";
    mysqli_query($con, $reg);
    $image = "INSERT INTO `userprofile`(`username`, `profile_image`, `bio`) VALUES ('$name', 'images/placeholder-person.jpg','bio')";
    mysqli_query($con, $image);

    header('location:login.php');
}

?> 