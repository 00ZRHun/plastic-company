<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Delete</title>
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
include_once('components/navbar.php');
if(isset($_GET['productName']))
{
    $productName = $_GET['productName'];    

    // echo $productName;
?>



<div class="container">
<form action="delete.php" method="POST" class="admin-form col-6" enctype="multipart/form-data">


    <h1 class="header text-center">Delete product</h1>

    <!-- Product name -->
    <label for="product_name">Chosen product's name :</label>    
    <?php 
        $sql = mysqli_query($mysqli,"SELECT *,product_category.product_type FROM category LEFT JOIN product_category ON category.brands = product_category.id WHERE product_name LIKE '%$productName%' ");                                                                    
        $row = mysqli_fetch_array($sql);
        $defaultImage = $row['product_image'];
    ?>    
    <input type="text" name="product_name" id="productName" value='<?php echo $row['product_name']?>' readonly/>
    <!-- <input type="text" class="new-productName" name="new-productName" id="newProductName" placeholder="Enter a new product name ..." value=""/> -->
    <img src="uploads/<?php echo $row['product_image']?>" alt="product" class='deleted-image'>
    <input type="submit" value="Delete" name="delete" class="submit-btn">

</form>


</div>

<?php
}
?>

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
