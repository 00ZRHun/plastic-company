

<!DOCTYPE html>
<html>
<head>
<title>Admin | Home</title> 
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
    
    // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo "<script>alert('You need permission to this page.')</script>";
        echo "<script>setTimeout(\"location.href ='adminLogin.php';\",1000);</script>";                        
        exit;
    }

    include('components/config.php');        
    include('components/navbar.php');
?>


<form method="get" action="detail.php">    

<span class="fixedBar--BottomLeft">
    <!-- Logout button -->
    <a class="fixedBar--btn" onclick="logout()"><i class="material-icons">exit_to_app</i></a>                                
    <!-- Edit type button -->
    <a class="fixedBar--btn" href="editBrand.php"><i class="material-icons">edit</i></a>                                
    <!-- Insert new type button -->
    <a class="fixedBar--btn" href="insertBrand.php"><i class="material-icons">playlist_add</i></a>                                
</span>

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
                 <div class="card admin-card">                        
                        <img src="uploads/<?php echo $row['product_image']?>" alt="" class="card-image">
                        <div class="card-content">
                            <h4 class="small-header my-auto"><?php echo $row['product_name']?></h4>   
                            <p class="price-tag">RM <?php echo $row['product_price']?></p>                     
                            <p class="paragraph"><?php echo $row['model'] ?></p>
                            <p class="paragraph"><?php echo $row['name'] ?> | <?php echo $row['product_type']?></p>                                                                     
                        </div>
                        <div class="operation-pane">
                            <a class="operate_btn" onclick="deleteProduct('<?php echo $row['product_name']?>')"><i class="small material-icons">delete</i> Delete</a>                            
                            <a class="operate_btn" onclick="editDetail('<?php echo $row['product_name']?>')"><i class="small material-icons">build</i> Edit</a>                            
                            <a class="operate_btn" onclick="displayDetail('<?php echo $row['product_name']?>')"><i class="small material-icons">pageview</i> View</a>                            
                        </div>
                 </div>

                <?php
                    }
            ?>

        </div>                                    
           
        </div>

    </section>

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

                <div class="card admin-card">                                                                
                    <div class="operation-pane upload-pane">
                        <a class="operate_btn" onclick="uploadProduct()"><i class="small material-icons">file_upload</i> Upload</a>                                                
                    </div>
                </div>

                <?php                    
                    // get type id
                    $currentTypeID = $row['id'];

                    $test = mysqli_query($mysqli,"SELECT *,product_category.product_type,product.name FROM category LEFT JOIN product ON category.category_product = product.id LEFT JOIN product_category ON category.brands = product_category.id WHERE brands = '$currentTypeID' ORDER BY product_id DESC LIMIT 7");                                                            
                    while ($row = mysqli_fetch_array($test)) {                    
                        $row['product_name'] = str_replace('"',"",$row['product_name']); 
                        if(strpos($row['product_name'],"#") !== false || strpos($row['product_name'],'"') !==false )
                        {
                            echo '<script>alert("error");</script>';
                        }
                ?>                 
                 <div class="card admin-card">                        
                        <img src="uploads/<?php echo $row['product_image']?>" alt="" class="card-image">
                        <div class="card-content">
                            <h4 class="small-header my-auto"><?php echo $row['product_name']?></h4>   
                            <p class="price-tag">RM <?php echo $row['product_price']?></p>                     
                            <p class="paragraph"><?php echo $row['name'] ?> | <?php echo $row['product_type']?></p>                                                                     
                        </div>
                        <div class="operation-pane">
                            <a class="operate_btn" onclick="deleteProduct('<?php echo $row['product_name']?>')"><i class="small material-icons">delete</i> Delete</a>                            
                            <a class="operate_btn" onclick="editDetail('<?php echo $row['product_name']?>')"><i class="small material-icons">build</i> Edit</a>                            
                            <a class="operate_btn" onclick="displayDetail('<?php echo $row['product_name']?>')"><i class="small material-icons">pageview</i> View</a>                            
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

<script src="scripts/adminHome.js"></script>
<script src="scripts/displayBrand.js"></script>
<!-- <script src="scripts/topnav.js"></script> -->
</body>
</html>
