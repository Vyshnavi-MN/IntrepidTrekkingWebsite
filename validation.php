<?php

session_start();

$con=mysqli_connect('localhost','root','','intrepidtrekkers');
$name=$_POST['username'];
$pass=$_POST['password'];

$sql="Select * from signup where username='$name' and password='$pass'";

$result=mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if($num==1){
    if(isset($_POST['loggedin'])){
        $pname=$_POST['username'];

        $sql32=   "UPDATE signup
         SET loggedin = 'yes'
        WHERE username = '$pname'" ;
        if(mysqli_query($GLOBALS['con'], $sql32)){
            echo "done";
        };
    }
    header('location:profile.php');
}
else{
    header('location:login.php');
}

?>