<!DOCTYPE html>
<html>
<head>
<title>Admin | Login</title> 
<link rel="stylesheet" href="css/reset.css">
<!-- <link rel="stylesheet" href="css/contact.css"> -->
<link rel="stylesheet" type="text/css" href="css/home.css">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php 
    
    include('components/config.php');        
    include('components/navbar.php');
    
    // Initialize the session
    session_start();
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: adminHome.php");
        exit;
    }

    $username = $password = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

	$sql = "SELECT username, password FROM admin WHERE username = '$username' && password = '$password'";
	$result = $mysqli->query($sql);

	if($result->num_rows > 0)
	{				
			// session_start();
			$_SESSION["loggedin"] = true;
			$_SESSION["username"] = $username;																				
			echo "<script>alert('Login successful.')</script>";
            echo "<script>location.href ='adminHome.php';</script>";                
    }

    else
        echo "<script>alert('Please retry again.')</script>";


}



?>


<div class="container">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="admin-form col-4">

    <h1 class="header text-center">Login</h1>
    <label for="username">Username :</label>    
    <input type="text" name="username" id="" value="<?php echo $username ?>" required/>

    <label for="password">Password :</label>    
    <input type="password" name="password" id="" required value="<?php echo $password ?>"/>

    <input type="submit" value="Login" name="login" class="submit-btn">

</form>
</div>

	<!-- ------------------------- FooterMainSection ---------------------------------->
    <?php
		include_once'firstFooter.php';
	?>
	<!-- ------------------------- Footer ---------------------------------->
			
	<?php
		include_once'footer.php';
	?>

<script src="scripts/adminHome.js"></script>
<!-- <script src="scripts/topnav.js"></script> -->
</body>
</html>

