<!DOCTYPE html>
  <html>
  <head>
      <title> Photo Gallery</title>
  <link rel = "stylesheet" type = "text / css" href = "#">
  <link href="https://fonts.googleapis.com/css?family=Dokdo|Fredoka+One&display=swap" rel="stylesheet">
  <style>
  header
  {
    font-size: 30px;
    font-family: 'Dokdo', cursive;
    font-family: 'Fredoka One', cursive;
    text-align: center;
  }
  p
  {
    font-size:50px;
    font-family: 'Fredoka One', cursive;
  }
  main
  {
    margin-Left: 120px;
  }
  .box{
        display: block;
        float: left;
        width: 20%;
        padding: 10px;
        padding-Left: 12px;
        overflow: hidden;
  }

  img{
      width: 100%;
      border-radius: 5px;
  }

  img:hover{
    transform: scale(2,2);
    transition: 3s transform;
    border-radius: 5px;
  }
  #header
	{
		position: relative;
		background: #2a2f27;
		background-size: cover;
	}
  a {
  font-size:50px;
}
</style>

  </head>
  <body class="homepage" background="images/imggrey.jfif">
    <header>
      <h1 style="color:grey;">Intrepid Family!</h1>
      <span class="byline" style="color:grey">We trek to learn - about life, about nature, about ourselves.</span>
    </header>
    <hr/>
    <main>
      <div class =" box "> <img src ="images/img1.jpg"> </div>
      <div class =" box "> <img src ="images/img2.jpg"> </div>
      <div class =" box "> <img src ="images/img3.jpg"> </div>
      <div class =" box "> <img src ="images/img4.jpg"> </div>
      <div class =" box "> <img src ="images/img5.jpg"> </div>
      <div class =" box "> <img src ="images/img6.jpg"> </div>
      <div class =" box "> <img src ="images/img7.jpg"> </div>
      <div class =" box "> <img src ="images/img8.jpg"> </div>
      <div class =" box "> <img src ="images/img9.jpg"> </div>
      <div class =" box "> <img src ="images/img10.jpg"> </div>
      <div class =" box "> <img src ="images/img12.jpg"> </div>
      <div class =" box "> <img src ="images/img13.jpg"> </div>
      <div class =" box "> <img src ="images/img14.jpg"> </div>
      <div class =" box "> <img src ="images/img15.jpg"> </div>
      <div class =" box "> <img src ="images/img16.jpg"> </div>
      <div class =" box "> <img src ="images/img1.jpg"> </div>
      <div class ="box">
        <video width="500" height="300" controls>
        <source src="video.mp4" type="video/mp4">
      </div>
      <div class ="box">
        <video width="500" height="300" controls>
        <source src="video1.mp4" type="video/mp4">
      </div>
      <div class ="box">
        <video width="500" height="300" controls>
        <source src="video3.mp4" type="video/mp4">
        <source src="movie.mp4" type="video/mp4">
      </div>
      <div class ="box">
        <video width="500" height="300" controls>
        <source src="video4.mp4" type="video/mp4">
        <source src="movie.mp4" type="video/mp4">
      </div>
      <div class =" box "> <img src ="images/img20.jpeg"> </div>
      <div class =" box "> <img src ="images/img21.jpeg"> </div>
        <div class =" box "> <img src ="images/img22.jpeg"> </div>
    </main>

    <div class="form-group">
      <a href="welcome.php" class="btn btn-danger">Back</a>
    </div>
    <!--<footer>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" value="Submit"><a href="welcome.html"></a>
     </div>
</footer>-->

  </body>

  </html>
