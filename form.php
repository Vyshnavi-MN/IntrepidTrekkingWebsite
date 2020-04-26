<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="intrepidtrekkers";

    $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
            $result = $conn->query("select trek_name from trek");
?>
<!DOCTYPE html>
<html >

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {

            background:#333 url("https://github.com/Vyshnavi2000/WebProject/blob/master/images/loginbg.jpg?raw=true") ;
            background-repeat:no-repeat;
            height: 200%;
            background-size:cover;
        <!--background-position: center;-->

            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .box {
            left:50%;
            top:30%;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            font-family: sans-serif;
            text-align: center;
            line-height: 1;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            max-width: 50%;
            max-height: 50%;
            padding: 20px 40px;
        }
        .container {
            position:absolute;
            display: flex;
            justify-content: center;
            left:10%;
            height: 185 %;
            width: 100%;
            padding-top:5%;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }


        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        }
    </style>
</head>
</html>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sign Up</title>
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
        <h1 align="center" >Registration Form</h1>
        <p align="center" style="color:white">Please fill this form to participate in our next trekking event.</p>



        <script>
            function validateform()
            {
                var name = document.forms["RegForm"]["Name"];
                var email = document.forms["RegForm"]["EMail"];
                var phone = document.forms["RegForm"]["Telephone"];
                var blood =  document.forms["RegForm"]["blood_group"];
                var dob = document.forms["RegForm"]["DOB"];
                var tname = document.forms["RegForm"]["trekname"];


                if (name.value == "")
                {
                    alert("Please enter your name.");
                    name.focus();
                    //location.href="submitted.php";
                    return false;
                }

                else if (dob.value == "")
                {
                    alert("Please enter your date of birth.");
                    dob.focus();
                    //location.href="submitted.php";
                    return false;
                }

                else if (email.value == "")
                {
                    alert("Please enter a valid e-mail address.");
                    email.focus();
                    //location.href="submitted.php";
                    return false;
                }

                else if (phone.value == "")
                {
                    alert("Please enter your phone number.");
                    phone.focus();
                    //location.href="";
                    return false;
                }

                else if(phone.value.length < 10 ||phone.value.length >10){
                    alert("Please enter valid phone number.");
                    phone.focus();
                    //location.href="#";
                    return false;
                }

                else if (blood.value == "")
                {
                    alert("Please enter your blood group");
                    blood.focus();
                    //location.href="submitted.php";
                    return false;
                }

                else if (tname.value== "")
                {
                    alert("Please enter your trek name.");
                    tname.focus();
                    //location.href="submitted.php";
                    return false;
                }
                else {
                    location.href="submitted.php";
                }
            }</script>

        <?php $trekid = $_GET['trekid']; ?>
        <form name="RegForm" action="submitted.php?trekid=<?php echo $trekid ?>" onsubmit="return validateform()" method="post">
            <div>
                <label>Name</label>

                <input type="text" placeholder="Name" name="Name" id="name" class="form-control" >
                <span class="help-block"></span>

            </div>
            <div >
                <label>Phone Number</label>
                <input type="number" name="Telephone" placeholder="Phone Number" id="phone" class="form-control">
                <span class="help-block"></span>
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="EMail" placeholder="mail" id="email" class="form-control" pattern=".+@gmail.com" size="30" required title="should end with @gmail.com">
                <span class="help-block"></span>
            </div>
            <div>
                <label>Age</label>
                <input type="text" name="age" placeholder="age" id="age" class="form-control"  >
                <span class="help-block"></span>
            </div>
            <div>
                <label>Blood Group</label>
                <select type="text" name="blood_group" id="blood" class="form-control">
                    <option>-Select-</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>B+</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select>
                <span class="help-block"></span>
            </div>
            <div>
                <label>Date of Birth</label>
                <input type="text" name="DOB" placeholder="DD/MM/YY" id="dob" class="form-control" pattern="\d{1,2}/\d{1,2}/\d{4}">
                <span class="help-block"></span>
            </div>
            <div>
                <label>Trek name</label><br>
                <select type="text" name="blood_group" id="blood" class="form-control">
                <option>-Select Trek Name-</option>
                    <?php
                        while ($row = $result->fetch_assoc()) {
                            unset($username);
                            $username = $row['trek_name'];
                            echo '<option value=" '.$username.'"  >'.$username.'</option>';
                        }
                    ?>
                </select>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
                <input type="reset" class="btn btn-primary" value="Reset" name="Reset">
            </div>
        </form>

</body>
</html>
