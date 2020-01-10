

<!DOCTYPE html>
<html>
<head>
<title>Products</title> 
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

    include('components/config.php');        
    include('components/navbar.php');

if(isset($_GET['Product']))
{
    $product = $_GET['Product'];      
        
?>

<form method="get" action="detail.php">                                  

    <section class="product-section">
        
        <div class="container">
            
            <!-- <h1 class="header col-12 text-center">All products</h1> -->
            
            <!-- Aluminium -->
            <?php
                
                //$sql = mysqli_query($mysqli,"SELECT *,product_category.product_type FROM category LEFT JOIN product_category ON category.type = product_category.id");
                // $sql = mysqli_query($mysqli,"SELECT * FROM category GROUP BY type");

            ?>
            
            <div class="product_content col-12">                
            
            <?php
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                            $test = mysqli_query($mysqli,"SELECT *,product.name,product_category.product_type FROM category LEFT JOIN product_category ON category.brands = product_category.id  LEFT JOIN product ON category.category_product = product.id WHERE category_product = '$product' ORDER BY product_id DESC");                         
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
                        }

                    else{                                                                
                        $test = mysqli_query($mysqli,"SELECT *,product.name,product_category.product_type FROM category LEFT JOIN product_category ON category.brands = product_category.id LEFT JOIN product ON category.category_product = product.id WHERE category_product = '$product' ORDER BY product_id DESC");                         
                        
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
                                <p class="paragraph"><?php echo $row['name'] ?> | <?php echo $row['product_type']?></p>                                                                     
                            </div>
                    </div>

                    <?php
                        }
                    }
                    ?>

            </div>            
            
        </div>

    </section>


</form>
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
