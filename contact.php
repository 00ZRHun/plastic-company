<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body>
<?php
include('components/config.php');        
include_once('components/navbar.php');
?>
	<div class="container">

	<?php 
		$sql = mysqli_query($mysqli,"SELECT image FROM about_us");     
		$row = mysqli_fetch_array($sql);
		echo '<img class="contact-img col-5" src="images/'.$row["image"].'" />';
	?>

		<form class="contact-form ml-auto col-5" action="order.php" method="POST" enctype="multipart/form-data">
			<h2 class="header">Contact us</h2>
			<p class="paragraph">Feel free to drop us a message</p>
			<label for="contact-name">Name</label>
			<input required type="text" name="contact-name" id=""/>                                    

			<label for="contact-email">Email</label>
			<input required type="email" name="contact-email" id=""/> 

			<label for="contact-phone">Contact No.</label>
			<input required type="text" name="contact-phone" id=""/>
			
			<label for="contact-message">Messages</label>
			<textarea required name="contact-message" id="" cols="10" rows="10" style="padding:.3em;resize:none;" placeholder="Leave your message here ..."></textarea>

			<input type="submit" value="Submit" name="contact-submit" class="submit-btn" style="margin-top:20px;margin-right:0;">
							
		</form>

	</div>
	
		<?php
			include_once'firstFooter.php';
		?>
		<!-- ------------------------- Footer ---------------------------------->
	
	<script src="scripts/d3.min.js"></script>
	<script src="scripts/menu.js"></script>
	<script src="scripts/topnav.js"></script>
</body>
</html>