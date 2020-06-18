
<!DOCTYPE html>
<html >

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background:#333 url(images/loginbg.jpg) ;
  background-repeat:no-repeat;
  height: 200%;
  background-size:cover;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.box {
  left:50%;
  top:50%;
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
  align-items: center;
  display: flex;
  justify-content: center;
  left:10%;
  height: 110%;
  width: 100%;
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

/*.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }*/
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<!--<div class="topnav" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="welcome.html">Our Blog</a>
  <a href="login.html">Media</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>-->



<!--<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>-->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{<!--width: 350px; padding: 20px;-->
background-color: #FF4136;
  width: 400px;
  height: 400px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);}
    </style>
</head>
<body>
  <script>
  function validateform()
  {
      var name = document.forms["RegForm"]["name"];
      var pass = document.forms["RegForm"]["password"];
      if (name.value == "")
      {
          alert("Please enter your name.");
          name.focus();
  				//location.href="submitted.php";
          return false;
      }
      else if (pass.value == "")
      {
          alert("Please enter your password.");
          pass.focus();
  				//location.href="submitted.php";
          return false;
      }
      else {
    		location.href="form.php";
    	}
}</script>

    <div class="container">
	<div class="box">
        <h1 align="center">Login</h1>
        <p align="center" style="color:white">Please login to visit our website!</p>
        <form name="RegForm" action="validation.php" onsubmit="return validateform()" method="post">
            <div action="welcome.php">
                <label>Username</label>
                <input type="text" name="username" id="name" placeholder="Username" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <button name="loggedin" class="btn btn-primary">Login</button>
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</div>
</body>
</html>
