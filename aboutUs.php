<?php  
 include('components/config.php');        
 
?>
<!DOCTYPE html>
<html>
<head>
<title>About us</title>
<link rel="stylesheet" type="text/css" href="css/home.css">   
<link rel="stylesheet" href="css/reset.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <style>
          * {box-sizing: border-box;}
          body {font-family: Verdana, sans-serif;}
          .mySlides {display: none;}
          img {vertical-align: middle;}

          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .active {
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
            .text {font-size: 11px}
          }
      </style>
</head>
<body>
  <?php
  include('components/navbar.php');
	$sql = "SELECT * from about_us;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_assoc($result);
  ?>  

  <section class="hero-section" style="min-height:50vh;">
  <img src="images/<?php echo $row['image']?>"class="img-thumnail"  style="width:100%;min-height:inherit;height:100%;"/>
  </section>
  
  <div class="container" style="flex-flow:column;text-align:center;min-height:70vh;display:flex;flex-flow:column;justify-content:center;">
    <img src="images/<?php echo $row['logo']?>" alt="" style="margin:0 auto;max-width:150px;max-height:150px;object-fit:contain;width:100%;height:100%;">
    <h1 class="header"><?php echo $row["title"]; ?></h1>
    <div class="content">
    <!-- <h1 class="header"></h1> -->
    <?php echo $row["content"]; ?>
    </div>
  </div>

  <?php include('firstFooter.php'); ?>
	

 <!-- automatic slide show -->
          

          <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>
</body>
</html>