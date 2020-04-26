<?php
function createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="intrepidtrekkers";

    $con=mysqli_connect($servername,$username,$password,$dbname);


    if(!$con)
        echo"connection failed";
    return $con;

}