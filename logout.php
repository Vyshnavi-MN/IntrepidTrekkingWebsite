<?php

session_start();

$con=mysqli_connect('localhost','root','','intrepidtrekkers');

$sql=  "UPDATE signup SET loggedin = 'no' WHERE loggedin = 'yes'" ;
if(mysqli_query($GLOBALS['con'], $sql)){
   echo "done";
   header('location:login.php');
};

?>