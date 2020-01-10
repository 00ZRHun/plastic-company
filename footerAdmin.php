<?php  

// Initialize the session
session_start();
    
// Check if the user is logged in, if not then redirect him to login page
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
	<title>Footer admin</title>
	
</head>
<body>
	<?php
	$sql = "SELECT * from footer;";
	//$result = $conn -> query($sql);
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_assoc($result);
	?>  

	<div class="content">
    <?php echo $row["address"]; ?>    <br>
    <?php echo $row["phone"]; ?>      <br>
    <?php echo $row["email"]; ?>      <br>
    <?php echo $row["whatsapp"]; ?>   <br>
    <?php echo $row["url"]; ?>	     
  </div>
	  
          <br><br>
	<button><a href="footerEdit.php">Edit</a></button>

</body>
</html>