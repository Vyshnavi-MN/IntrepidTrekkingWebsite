<?php 
$msg="";
$css_class="";
$con=mysqli_connect('localhost', 'root', '', 'intrepidtrekkers');

if(isset($_POST['update'])){
    echo "<prev>", print_r($_FILES['profileImage']['name']), "<prev>";
    
    $bio=$_POST['bio'];
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];
    $username=$_POST['username'];
    $target = 'images/' .$profileImageName;

    if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
        $sql="INSERT INTO userprofile (profile_image, bio) Values ('$profileImageName', '$bio') where username='$username'";
        if(mysqli_query($con, $sql)){
            $msg="Image uploaded and saved to database";
            $css_class="alert-success";
            $bio;
        }
        else{
            $msg="Database Error: Failed to Update Information";
            $css_class="alert-danger";
        }
    }
    else{
        $msg="Failed to upload the image";
        $css_class="alert-danger";
    }
}

