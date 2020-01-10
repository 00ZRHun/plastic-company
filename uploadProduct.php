<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Upload</title>
<link rel="stylesheet" type="text/css" href="css/home.css">   
<link rel="stylesheet" href="css/reset.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<?php 
 // Initialize the session
 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>alert('You need permission to this page.')</script>";
    echo "<script>setTimeout(\"location.href ='adminLogin.php';\",1000);</script>";                        
    exit;
}
include('components/config.php');        
include('components/navbar.php');


?>    

<div class="container uploadContainer">
<form action="upload.php" method="POST" class="admin-form col-6" enctype="multipart/form-data">

    <h1 class="header text-center">Upload product</h1>

    <!-- Product name -->
    <label for="product_name">Product Name :</label>
    <input type="text" name="product_name" id="productName"/>
    <small class="small" style="color:red">(#'") can't be existed in product name.</small>

    <!-- Product price -->
    <label for="product_price">Product price :</label>
    <input type="text" name="product_price" id=""/>

    <!-- Brand category -->
    <label for="brand">Choose brand :</label>
    <select name="brand" id="">

        <?php
            $test = mysqli_query($mysqli,"SELECT * FROM product_category");                                        
            while ($row = mysqli_fetch_array($test)) 
            {                        
        
            echo '<option value='.$row["id"].'>'.$row["product_type"].'</option>';
        
            }
        ?>
    </select>

    <!-- Product category -->
    <label for="product">Product :</label>
    <select name="product" id="">

        <?php
            $test = mysqli_query($mysqli,"SELECT * FROM product");                                        
            while ($row = mysqli_fetch_array($test)) 
            {                        
        
            echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
        
            }
        ?>
    </select>

    <!-- Product image -->
    <label for="image">Product Image :</label>
    <input type="file" name="image" id="image"/>

    <!-- Product size 
    <label for="packaging_size">Packaging Size :</label>
    <textarea name="packaging_size" id="" cols="30" rows="10" style="resize:none;"></textarea>-->

    <label for="product_description">Descriptions :</label>
    <textarea name="product_description" id="" cols="10" rows="5" style="resize:none;"></textarea>

    <label for="product_model">Model :</label>
    <input type="text" name="product_model" id=""/>

    <label for="packaging">Packaging :</label>
    <input type="text" name="packaging" id=""/>

    <label for="packaging_size">Size :</label>
    <input type="text" name="packaging_size" id=""/>    

    <input type="submit" value="Submit" name="upload" class="submit-btn">

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
