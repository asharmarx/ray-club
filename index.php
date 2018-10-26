<!DOCTYPE html>
<html lang="en">
<head>

  <title>RAY Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css"/>

  <link rel="icon" type="image/png" href="images/logo_background_pic/sun-logo.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="smooth_scroll.js" type="text/javascript"></script>
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

        </button>
        <a class="navbar-brand" href="#myPage">RC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="#photos">GALLERY</a></li>
          <li><a href="#announce">ANNOUNCEMENTS</a></li>


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
        <p>How will we achieve this? We will create a safe and exciting environment in which kids can learn new skills, and participate in fun activities. We only go to the orphanage twice a month, our hope is that the kids can utilize the skills and activities we put together, in order to learn how to build and strengthen current and future relationships.</p>

      </div>
    </div>
  </div>


  <div id = "contact" class="container-fluid row">
    <div class="column contactLeft">
      <div class="names">
        <h1>President</h1>
        <h3>Josephine Kim</h3>
        <h1>Director</h1>
        <h3>Kelly Kim</h3>
      </div>
    </div>
    <div class="column contactRight">
      <div class="info">
        <h1>Contact:</h1>
        <h2>(562) 241 5678</h2>
      </div>
    </div>
  </div>

  <div id="photos">
    <div class="slideshow-container">

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
          <img src= <?php echo "\"$currentImage\"";?> style="width:100%">
        </div>
        <?php
      endfor; ?>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div> <!--  end slideshow cointainer -->

  <script text="type/javascript">

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


</body>

</html>
