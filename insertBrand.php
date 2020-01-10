<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Insert new type</title>
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

<div class="container insertBrand-container mx-auto">

<span class="selection-pane col-2 ml-auto">
    <button class="selection__tab currentTab" id="brandTab">Insert brand</button>
    <button class="selection__tab" id="productTab">Insert product</button>
</span>

<span class="col-7 mr-auto">
<form action="insert.php" method="POST" class="brand-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Insert new brand</h1>

    <!-- Product brand -->
    <label for="inserted_brand">Brand :</label>
    <input type="text" name="inserted_brand" id=""/>
    <!-- <small class="small" style="color:red">(#'") can't be existed in product name.</small> -->
  

    <input type="submit" value="Insert" name="insert" class="submit-btn">
</form>

<!-- Insert product -->
<form action="insert.php" method="POST" class="product-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Insert new product</h1>
    
    <label for="inserted_product">Product :</label>
    <input type="text" name="inserted_product" id=""/>    


    <input type="submit" value="Insert" name="insertProduct" class="submit-btn">

</form>

</span>

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
<script src="scripts/insertBrand.js"></script>
<!-- <script src="scripts/topnav.js"></script> -->
</body>
</html>
