<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Edit</title>
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
$defaultImage = '';

if(isset($_GET['productName']))
{   
    // $name = $_GET['productName'];        
    // $productName = str_replace('#','"#"',$name);    
    $productName = $_GET['productName'];
?>

<div class="container">
<form action="edit.php" method="POST" class="admin-form col-6" enctype="multipart/form-data">


    <h1 class="header text-center">Edit product</h1>

    <!-- Product name -->
    <label for="product_name">Chosen products' name :</label>    
    <?php 
        $sql = mysqli_query($mysqli,"SELECT *,product_category.product_type FROM category LEFT JOIN product_category ON category.brands = product_category.id WHERE product_name LIKE '%$productName%' ");                                                                    
        $row = mysqli_fetch_array($sql);
        $defaultImage = $row['product_image'];                
        $defaultName = mysqli_real_escape_string($mysqli,$row['product_name']);   
        $defaultSize = mysqli_real_escape_string($mysqli,$row['product_size']);   
        $defaultPackaging = mysqli_real_escape_string($mysqli,$row['packaging']);   
        // $defaultBrand = mysqli_real_escape_string($mysqli,$row['brands']);
        $defaultModel = mysqli_real_escape_string($mysqli,$row['model']);
        $defaultDescription = mysqli_real_escape_string($mysqli,$row['description']);
        $defaultPrice = $row['product_price'];
                
            
    echo '<input type="text" name="product_name" id="productName" value="'.$defaultName.'" readonly/>';
    ?>
    <!-- <input type="text" class="new-productName" name="new-productName" id="newProductName" placeholder="Enter a new product name ..." value=""/> -->

    
    <!-- Product price -->
    <label for="product_price">Product price :</label>
    <input type="text" name="product_price" id="" value="<?php echo $defaultPrice ?>"/>

    <!-- Product category -->
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
    <img src="uploads/<?php echo $defaultImage?>" alt="" class="edit-image">
    <input type="file" name="image" id="image"/>

    <!-- Product size 
    <label for="packaging_size">Packaging Size :</label>
    <textarea name="packaging_size" id="" cols="30" rows="10" style="resize:none;"></textarea>-->

    <label for="product_description">Descriptions :</label>
    <textarea name="product_description" id="" cols="10" rows="5" style="resize:none;"><?php echo $defaultDescription?></textarea>

    <label for="product_model">Model :</label>
    <input type="text" name="product_model" id="" value="<?php echo $defaultModel ?>"/>

    <label for="packaging">Packaging :</label>
    <input type="text" name="packaging" id="" value="<?php echo $defaultPackaging ?>"/>

    <label for="packaging_size">Size :</label>
    <input type="text" name="packaging_size" id="" value="<?php echo $defaultSize ?>"/>    

    <input type="submit" value="Edit" name="edit" class="submit-btn">

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
