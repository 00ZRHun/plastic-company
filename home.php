<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/home.css">   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php

// Initialize the session
session_start();
    
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: adminHome.php");
    exit;
}

include('components/config.php');        
include('components/navbar.php');

?>

<form method="get" action="detail.php">
        
    <!-- latest product -->
    <section class="product-section">
        
        <div class="container">
        

        <div class="product_content col-12">
        <h1 class="header col-12 text-center">Latest products</h1>
            <?php                    
                    $test = mysqli_query($mysqli,"SELECT *,product_category.product_type,product.name FROM category LEFT JOIN product ON category.category_product = product.id LEFT JOIN product_category ON category.brands = product_category.id ORDER BY product_id DESC LIMIT 8");                                                            
                    while ($row = mysqli_fetch_array($test)) {                    
                        $row['product_name'] = str_replace('"',"",$row['product_name']); 
                        if(strpos($row['product_name'],"#") !== false || strpos($row['product_name'],'"') !==false )
                        {
                            echo '<script>alert("error");</script>';
                        }
                ?>                 
                 <div class="card latest-card" onclick="displayDetail('<?php echo $row['product_name']?>')">                        
                        <img src="uploads/<?php echo $row['product_image']?>" alt="" class="card-image">
                        <div class="card-content">
                            <h4 class="small-header my-auto"><?php echo $row['product_name']?></h4>   
                            <p class="price-tag">RM <?php echo $row['product_price']?></p>                     
                            <p class="paragraph"><?php echo $row['model'] ?></p>
                            <p class="paragraph"><?php echo $row['name']?> | <?php echo $row['product_type']?></p>                                                                     
                        </div>
                 </div>

                <?php
                    }
            ?>

        </div>                                    
           
        </div>

    </section>

    <!-- Every products sort by brands -->
    <section class="product-section">
        
        <div class="container">
            
            <h1 class="header col-12 text-center">Our brands</h1>
                        
            <?php
                
                //$sql = mysqli_query($mysqli,"SELECT *,product_category.product_type FROM category LEFT JOIN product_category ON category.type = product_category.id");
                $sql = mysqli_query($mysqli,"SELECT * FROM product_category");
                while ($row = mysqli_fetch_array($sql)) {             
            ?>
            <p class="grey-label"><?php echo $row["product_type"]?></p>
            <div class="product_content col-12">
                

                <?php                    
                    // get type id
                    $currentTypeID = $row['id'];

                    $test = mysqli_query($mysqli,"SELECT *,product_category.product_type,product.name FROM category LEFT JOIN product ON category.category_product = product.id LEFT JOIN product_category ON category.brands = product_category.id WHERE brands = '$currentTypeID' ORDER BY product_id DESC LIMIT 8");                                                            
                    while ($row = mysqli_fetch_array($test)) {                    
                        $row['product_name'] = str_replace('"',"",$row['product_name']); 
                        if(strpos($row['product_name'],"#") !== false || strpos($row['product_name'],'"') !==false )
                        {
                            echo '<script>alert("error");</script>';
                        }
                ?>                 
                 <div class="card" onclick="displayDetail('<?php echo $row['product_name']?>')">                        
                        <img src="uploads/<?php echo $row['product_image']?>" alt="" class="card-image">
                        <div class="card-content">
                            <h4 class="small-header my-auto"><?php echo $row['product_name']?></h4>   
                            <p class="price-tag">RM <?php echo $row['product_price']?></p>                     
                            <p class="paragraph"><?php echo $row['name']?> | <?php echo $row['product_type']?></p>                                                                     
                        </div>
                 </div>

                <?php
                    }
                ?>

            
                                    
            </div>

            <?php 
            }
            ?>
        </div>

    </section>

    <section class="product-section brand-section">
        
        <div class="container">

            <div class="product_content col-12">
            <h1 class="small-header col-12 text-center">More available brands ON</h1>
            <h1 class="header col-12 text-center">Fieldcon</h1>

                <?php                    
                    $sql = mysqli_query($mysqli,"SELECT * FROM product_category");  

                    while ($row = mysqli_fetch_array($sql)) {
                    
                        echo '<a class="brand-tags" onclick="displayBrand('.$row["id"].')">'.$row["product_type"].'</a>';

                    }
                ?>

            
                                    
            </div>

        </div>

    </section>

</form>


<!-- ------------------------- FooterMainSection ---------------------------------->
<?php
	include_once'firstFooter.php';
?>
<!-- ------------------------- Footer ---------------------------------->
		
<?php
	include_once'footer.php';
?>
<!-- <script src="scripts/topnav.js"></script> -->
<script src="scripts/home.js"></script>
<script src="scripts/displayBrand.js"></script>
</body>
</html>
