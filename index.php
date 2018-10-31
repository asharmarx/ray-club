<!DOCTYPE html>
<html lang="en">
<head>

  <title>RAY Club</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/logo_background_pic/sun-logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="smooth_scroll.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <style media="screen">

  html, body {
    height: 100%;
  }
  body{
    background-color: #2D2D30;
  }
  body::-webkit-scrollbar {
    display: none;
  }

  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2D2D30 !important;
    border: 0 !important;
    font-size: 0.85em !important;
    letter-spacing: 0.4em;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: black !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  /* HOME COLUMN */

  #home{
    height: 100%;
    width: 100%;
    max-height: 100%;
    padding: 0;
    background-color: #EBEBEB;
    background-image: url("images/logo_background_pic/backgroundImage.jpg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 2em;
  }

  /* ABOUT COLUMN */

  #about{
    height: 90%;
    width: 100%;
    max-height: 90%;
    padding: 0;
  }

  .column{
    position: absolute;
    padding: 0;
    height: 90%;
    overflow-x: hidden;
  }

  .left{
    background-color: black;
    left: 0;
    width: 30%;
  }

  .right{
    background-color: #EBEBEB;
    right: 0;
    width: 70%;
  }

  .right > .text-center {
    font-family: Montserrat, sans-serif;
    margin: 5% 4% 2% 8%;
    font-size: 1.3em;
    text-align: left;
    line-height: 1.75;
  }

  .right > .text-center > h3 {
    text-align: center;
  }

  .right > .text-center > h1 {
    margin-top: 10%;
  }

  .title {
    font-family: Montserrat, sans-serif;
    font-size: 2em;
    margin-left: 25%;
    margin-top: 25%;
    color: #EBEBEB;
  }

  .title > span {
    font-size: 3em;
  }

  /* CONTACT COLUMN */

  #contact{
    height: 40%;
    width: 100%;
  }

  .contactLeft{
    background-color: #EBEBEB;
    left: 0;
    width: 70%;
  }
  .contactLeft > .names {
    font-family: Montserrat, sans-serif;
    margin-left: 5%;
  }

  .person {
    border: 0.5em solid transparent;
    margin-bottom: 0.5em;
    width: 100%;
    height: 100%;
    opacity: 0.8;
  }

  .person:hover {
    border-color: #CBCBCB;
  }

  .contactRight{
    background-color: black;
    right: 0;
    width: 30%;
  }

  .info {
    margin-top: 15%;
    margin-left: 25%;
    font-family: Montserrat, sans-serif;
    color: white;
  }

  #contact .column {
    height: inherit;
  }

  #members{
    height: auto;
    background-color: #EBEBEB;
  }
  .collapse.show {
    display: block !important;
  }
  .collapse.row.show {
    display: flex !important;
  }

  #members > p{
    margin-top: 2%;
    text-align: center;
    font-size: 2.5em;
    color: black;
    font-family: Montserrat, sans-serif;
  }

  /* Slideshow container */

  #photos{
    background-color: black;
  }

  .mySlides {
    display: none;
    opacity: 1 !important;
  }

  .mySlides>img {
    vertical-align: middle;
    width: 100%;
  }

  .slideshow {
    max-height: auto;
    max-width: 70%;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 1.5em;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  .active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }

  #announce{
    height: 80%;
    width: 100%;
    padding: 0;
  }

  .announceLeft{
    left: 0;
    width: 30%;
    background-color: black;
  }

  .announceRight{
    right: 0;
    width: 70%;
    background-color: #EBEBEB;
  }

  .announceLeft > h1, .ptaRight > h1 {
    font-family: Montserrat, sans-serif;
    margin-top: 50%;
    margin-left: 1em;
    color: white;
  }

  .announceRight > h3, .ptaLeft > h3{
    font-family: Montserrat, sans-serif;
    margin-left: 1em;
    color: black;
    line-height: 1.5em;
  }

  #pta{
    height: 80%;
    width: 100%;
    padding: 0;
  }

  .ptaLeft{
    left: 0;
    width: 70%;
    background-color: #EBEBEB;
  }

  .ptaRight{
    right: 0;
    width: 30%;
    background-color: black;
  }

  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
        <a class="navbar-brand" href="#myPage">RC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="#members">BOARD</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#photos">GALLERY</a></li>
            <li><a href="#announce">ANNOUNCEMENTS</a></li>
            <li><a href="#pta">PTA BOARD</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id = "home" class="container-fluid"></div>

  <div id = "about" class="container-fluid row">
    <div class="column left">
      <div class="title">
        <span>R</span> esilience <br>
        <span>A</span> mongst <br>
        <span>Y</span> outh
      </div>
    </div>
    <div class="column right">
      <div class="text-center">
        <h3>RAY is a club dedicated to supporting orphaned youth</h3>
        <h1>Vision</h1>
        <p>The vision of RAY is embodied in its name. The club strives to equip and nurture orphaned youth, so that they may find the capacity of resilience within themselves. Resilience is defined as "the capacity to recover quickly from difficulities"</p>
        <h1>Mission</h1>
        <p>How will we achieve this? We will create a safe and exciting environment in which kids can learn new skills and participate in fun activities such as painting nails, playing guitars, and creating art crafts. We will also play sports like volleyball, basketball, and soccer. Additionally, we will have an infant childcare program for new, teen mothers. We will also provide snacks for the orphaned youth to enjoy. We go to the orphanage 2-3 times a month in hope that the kids can utilize the skills and activities we put together to learn how to build and strengthen current and future relationships.</p>

      </div>
    </div>
  </div>


  <div id = "contact" class="container-fluid row">
    <div class="column contactLeft">
      <div class="names">
        <h1>President</h1>
        <h3>Josephine Kim</h3>
        <h3>Cerritos High School 12th</h3>


      </div>

    </div>
    <div class="column contactRight">
      <div class="info">
        <h1>Director</h1>
        <h3>Kelly Kim</h3>
        <h1>Contact:</h1>
        <h2>(562) 241 5678</h2>
      </div>
    </div>
  </div>

  <div id = "members" class="container-fluid">
      <p><strong>2018 Board Memebers</strong></p>
    <?php
    $boardPhotos = glob("images/boardPhotos/*.{jpeg,jpg,JPEG,JPG}", GLOB_BRACE);
    $boardPhotoCount = count($boardPhotos);
    $boardNames = array("Josephine Kim", "David Ahn", "Ina Song", "Michelle Kim", "William Mun", "Kevin Kim", "Tommy Noh", "Seokwhan Jang", "Jeonguk Hong", "Nathan Kim", "Eliana Choi", "Joanna Choi");
    $boardDes = array("<div id = \"demo0\" class=\"text-center collapse\">
    <p>Cerritos High School 12th</p>
    <p>Founder 2016</p>
    <p>Vice-President 2016-17</p>
    <p>President 2017-18</p>
    </div>",

    "<div id = \"demo1\" class=\"text-center collapse\">
    <p>Whitney High School 12th</p>
    <p>Founder 2016</p>
    <p>Vice-President 2016-17</p>
    <p>Vice-President 2017-18</p>
    </div>",

    "<div id = \"demo2\" class=\"text-center collapse\">
    <p>Cerritos High School 11th</p>
    <p>Founder 2016</p>
    <p>Secretary 2016-17</p>
    <p>Secretary 2017-18</p>
    </div>",

    "<div id = \"demo3\" class=\"text-center collapse\">
    <p>Cerritos High School 12th</p>
    <p>Treasurer 2017-18</p>
    </div>",

    "<div id = \"demo4\" class=\"text-center collapse\">
    <p>Troy High School 11th</p>
    <p>Events Chair 2018</p>
    </div>",

    "<div id = \"demo5\" class=\"text-center collapse\">
    <p>Diamond Bar High School 12th</p>
    <p>Events Chair 2018</p>
    </div>",

    "<div id = \"demo6\" class=\"text-center collapse\">
    <p>Cerritos High School 11th</p>
    <p>Public Relations 2018</p>
    </div>",

    "<div id = \"demo7\" class=\"text-center collapse\">
    <p>Cerritos High School 11th</p>
    <p>Public Relations  2018</p>
    </div>",

    "<div id = \"demo8\" class=\"text-center collapse\">
    <p>Oxford Academy 10th</p>
    <p>Community Outreach 2018</p>
    </div>",

    "<div id = \"demo9\" class=\"text-center collapse\">
    <p>Oxford Academy 9th</p>
    <p>Founder 2016</p>
    <p>Community Outreach 2018</p>
    </div>",

    "<div id = \"demo10\" class=\"text-center collapse\">
    <p>Palos Verdes High School 12th</p>
    <p>Fundraising Coordinator 2017-18</p>
    </div>",

    "<div id = \"demo11\" class=\"text-center collapse\">
    <p>Palos Verdes High School 11th</p>
    <p>Fundraising Coordinator 2017-18</p>
    </div>");
    $indexCount = 0;
    for ($j=0; $j < 2; $j++) {
      ?>
      <div class="row">
        <?php
        for ($i=0; $i < $boardPhotoCount/2; $i++) {
          ?>
          <div class="col-sm-2">
            <a href="javascript:void(0);" data-target=<?php echo "\"#demo$indexCount\"";?> data-toggle="collapse" data-parent="#members">
              <img src=<?php echo "$boardPhotos[$indexCount]"; ?> class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
            <p class="text-center"><strong><?php echo "$boardNames[$indexCount]"; ?></strong></p>
            <?php echo "$boardDes[$indexCount]"; ?>
          </div>

          <?php
          $indexCount += 1;
        }
        ?>
      </div><br><br><br>
      <?php
    } ?>
  </div>

  <div id = "photos" class="container-fluid">
    <div class="slideshow">
      <?php
      $imgFiles = glob("images/*.{jpg,jpeg,JPEG,JPG}", GLOB_BRACE);
      $numFiles = count($imgFiles);
      for($i = 0; $i < $numFiles; $i++):
        $currentImage = $imgFiles[$i];
        $imgString = "\"images/";
        $currentimgNumber = $i + 1;
        ?>
        <div class="mySlides fade">
          <div class="numbertext"><?php echo "$currentimgNumber/$numFiles";?>
          </div>
          <img src= <?php echo "\"$currentImage\"";?> alt="Random Name" style="width:100%">
        </div>
        <?php
      endfor; ?>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div> <!--  end slideshow cointainer -->

  <script type="text/javascript">

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
  </script>

  <div id = "announce" class="container-fluid">
    <div class="column announceLeft">
      <h1>ANNOUNCEMENTS</h1>
    </div>
    <div class="column announceRight">
      <h3>
        <?php
        $announceFile = fopen("announcements.txt","r");
        while(!feof($announceFile)) {
          echo fgets($announceFile) . "<br>";
        }
        fclose($announceFile);
        ?>
      </h3>
    </div>
  </div>

  <div id = "pta" class="container-fluid">
    <div class="column ptaLeft">
    </div>
    <div class="column ptaRight">
      <h1>PTA BOARD</h1>
    </div>
  </div>


</body>

</html>
