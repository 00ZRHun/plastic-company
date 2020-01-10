<?php  

include('components/config.php');        

?>
<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="css/footer.css">	 
</head>
<body>
	<?php
	$sql = "SELECT * from footer;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_assoc($result);
	?>  
	
	<div class="content">
<!-- <h1 class="header"></h1> -->
    <p class="footer-address"><?php echo $row["address"]; ?></p>
    <p class="footer-phone"><?php echo $row["phone"]; ?></p>
	<a class="footer-mail" href = "mailto: <?php $row["email"];?>"><?php echo $row["email"]; ?></a>      <br>	
    <a class="footer-whatsapp" href="https://api.whatsapp.com/send?phone=<?php $row["whatsapp"]; ?>">Whatsapp:<?php echo $row["whatsapp"]; ?></a>   <br>
    <a class="footer-website "href="<?php $row["url"]; ?>"><?php echo $row["url"]; ?></a>
	</div>
	
</body>
</html>