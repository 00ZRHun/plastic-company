<?php  
 // Initialize the session
 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>alert('You need permission to this page.')</script>";
    echo "<script>setTimeout(\"location.href ='adminLogin.php';\",1000);</script>";                        
    exit;
}
 include('components/config.php');          
?>
<!DOCTYPE html>
<html>
<head>
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
<body style="display:flex;flex-flow:column" class="container">
	<?php
	$sql = "SELECT * from about_us;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);
  $defaultImage = $row['image'];  
  $defaultLogo = $row['logo'];  
  ?>  
  
  <label for="image">About image</label>    
  <img src="images/<?php echo $defaultImage?>" alt="" class="edit-image">    

	<h1 class="title">Title:<?php echo $row["title"]; ?></h1>

	<br>

	<div class="content">
  <!-- <h1 class="header"></h1> -->
  Content:<?php echo $row["content"]; ?>
	</div>
	  

          <br><br>
  
  <label for="logo">Logo:</label>    
  <img src="images/<?php echo $defaultLogo?>" alt="" style="width:150px;height:150px;object-fit:cover;">    

	<a href="aboutUsEdit.php" class="submit-btn">Edit</a>
	<!-- 
	<div class="image"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" style="text-align: right; margin: 30" /></div>
 -->
</body>
</html>

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