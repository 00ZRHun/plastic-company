<?php  
 // Initialize the session
 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>alert('You need permission to this page.')</script>";
    echo "<script>setTimeout(\"location.href ='adminLogin.php';\",1000);</script>";                        
    exit;
}
include('components/config.php');        



$sql = "SELECT * from about_us;";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$defaultImage = $row['image'];
$defaultLogo = $row['logo'];

///////////////--------edit--------/////////////
	if( isset($_POST['submit']) ){    
    //$result = $conn -> query($sql);
  

    $title = $_POST['title'];
    $content = $_POST['content'];    
    $image = $_FILES['image']['name'];   
    $logo = $_FILES['logo']['name'];
    

    if( $title && $content && $image)
    {
      $defaultImage = $row['image'];
      $Path = 'images/'.$defaultImage;
      chown($Path,666);
      $sql = "update about_us set title='$title' , content='$content', image='$image'";
      $target = "images/".basename($image);
      if( $mysqli->query($sql) === true)          
      {            
          if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
          {
            unlink($Path); 
            echo "<script>alert('About us has been edited.')</script>";
            echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";
          }
      }               
    }

    if( $logo)
    {
      $defaultLogo = $row['logo'];
      $Path = 'images/'.$defaultLogo;
      chown($Path,666);
      $sql = "update about_us set logo='$logo'";
      $target = "images/".basename($logo);
      if( $mysqli->query($sql) === true)          
      {            
          if (move_uploaded_file($_FILES['logo']['tmp_name'], $target))
          {
            unlink($Path); 
            echo "<script>alert('About us has been edited.')</script>";
            echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";
          }
      }               
    }

    else if( $title && $content )
    {
      $sql = "update about_us set title='$title' , content='$content' ";
      if( $mysqli->query($sql) === true)          
      {            
          echo "<script>alert('About us has been edited.')</script>";
          echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";
      }       
    }

    else
    {
        echo "<script>alert('Please fill up all information.')</script>";
        echo "<script>setTimeout(\"window.location.assign('aboutUsEdit.php');\",1000);</script>";
    }
  
    
	}


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
<body>
	<form action="aboutUsEdit.php" method="post" enctype="multipart/form-data" style="display:flex;flex-flow:column" class="container">
    <label for="image">About image</label>
    <img src="images/<?php echo $defaultImage?>" alt="" class="edit-image">
    <input type="file" name="image" id="image"/>

		Title :<br>
		<input type="text" name="title" style="" value="<?php echo $row["title"]; ?>"><br>
		Content:<br>
		<textarea rows="5" cols="10" type="text" name="content"><?php echo $row["content"]; ?></textarea><br>

    <label for="logo">Logo</label>
    <img src="images/<?php echo $defaultLogo?>" alt="" style="width:150px;height:150px;object-fit:cover;">
    <input type="file" name="logo" id=""/>

		<input type="submit" name="submit" value="submit" class="submit-btn">
	<!-- 
	<div class="image"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" style="text-align: right; margin: 30" /></div>
	automatic slide show -->
         <br /><br />  
             



	</form>
	
</body>
</html>
<script>
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  