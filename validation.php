<?php

session_start();

$con=mysqli_connect('localhost','root','','intrepidtrekkers');
$name=$_POST['username'];
$pass=$_POST['password'];

$sql="Select * from signup where username='$name' and password='$pass'";

$result=mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if($num==1){
    
    header('location:index.php');
}
else{
    header('location:login.php');
}

?>