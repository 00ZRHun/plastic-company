<!DOCTYPE html>
<html>
<head>
<title>Product</title>
<link rel="stylesheet" type="text/css" href="css/detail.css">   
<link rel="stylesheet" href="css/reset.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


<?php     

include('components/config.php');        
include_once('components/navbar.php');

if(isset($_GET['productName']))
{
    $productName = $_GET['productName'];    
    $productBrand = "";
    // echo $productName;
?>

    <section class="info-section">
                
        <div class="container">
                
                <?php
                    $sql = mysqli_query($mysqli,"SELECT *,product_category.product_type,product.name FROM category LEFT JOIN product_category ON category.brands = product_category.id LEFT JOIN product ON category.category_product = product.id WHERE product_name LIKE '%$productName%' ");                                        
                    while ($row = mysqli_fetch_array($sql)) 
                    { 
                        $productBrand = $row['brands'];
                ?>
                    <!-- <p class="col-12 mx-auto paragraph">All > <?php# echo $row['product_type'] ?></p> -->
                    <p class="col-12 mx-auto paragraph">All > <?php echo $row['name'] ?></p> 

                    <!--  Left  -->                    
                                                                    
                    <img src="uploads/<?php echo $row['product_image']?>" alt="product" class="col-5 mr-auto product-image" id="myimage">                                                                                                                                        
                                                                                       
                    <div class="col-6 description-pane">

                        <!-- Name -->
                        <p class="product-name" style=""><?php echo $row['product_name']?></p>                                                                       

                        <!-- Price -->
                        <p class="price-tag">RM<?php echo $row['product_price']?></p>                                                 
                                
                        <button class="description-tab col-12">Description</button>
                        <div class="description col-12">                        
                        <!-- Brand -->
                        <div class="d-flex flex-row-wrap">
                            <p class="product-brand col-5">Brand: </p>
                            <p class="small col-6"><?php echo $row['product_type']?></p>
                        </div>
                                
                        <!-- Description -->
                        <div class="d-flex flex-row-wrap">
                            <p class="product-description col-5">Description :</p>
                            <p class="small col-6"><?php echo $row['description']?></p>                         
                        </div>
                                
                        <!-- Model -->
                        <div class="d-flex flex-row-wrap">
                            <p class="product-model col-5">Model :</p>
                            <p class="small col-6"><?php echo $row['model']?></p>
                        </div>

                        <!-- packaging -->
                        <div class="d-flex flex-row-wrap">
                            <p class="product-packaging col-5">Packaging :</p>
                            <p class="small col-6"><?php echo $row['packaging']?></p>
                        </div>

                        <!-- size -->
                        <div class="d-flex flex-row-wrap">
                            <p class="package-size col-5">Packaging size :</p>
                            <p class="small col-6"><?php echo $row['product_size']?></p>                                                                                           
                        </div>
                        </div>

                    </div>
                    

        </div>  

        <div class="container">              
                <form action="order.php" method="POST" enctype="multipart/form-data" class="guest-form col-12">
                        
                        <!-- <img src="images/logo.jpg" alt="logo"> -->
                        <!-- <i class="material-icons text-center" style="margin-top:30px;font-size:36px;color:orange">flare</i> -->

                        <p class="header col-12" style="margin:0;padding:0;padding-bottom:.5em;font-weight:bold;border-bottom:1px solid rgba(0,0,0,.15)">Contact us</p>

                        <span class="col-6 d-flex flex-column" style="padding:0 1em;">
                        <label for="name">Name</label>
                        <input type="text" name="name" id=""/>                                    

                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" id=""/>                                    

                        <label for="product_interested">Product Interested</label>
                        <input type="text" name="product_interested" id="" value="<?php echo $productName ?>" readonly />  

                        <label for="product_quantity">Quantity</label>
                        <input type="text" name="product_quantity" id=""/> 
                        </span>

                        <span class="col-6 d-flex flex-column" style="padding:0 1em;">
                        <label for="guest_email">Email</label>
                        <input type="email" name="guest_email" id=""/> 

                        <label for="guest_phone">Contact No.</label>
                        <input type="text" name="guest_phone" id=""/> 

                        <!-- Product size -->
                        <label for="message">Messages</label>
                        <textarea name="message" id="" cols="10" rows="8" style="padding:.3em;resize:none;" placeholder="Leave your message here ..."></textarea>

                        </span>
                        <input type="submit" value="Submit" name="submit" class="submit-btn">
                </form>
        </div>
                                                 

                    <!-- Thumbnail -->
                    <div class="thumbnail-section">
                        
                        <div class="container">                                                        
                        <p class="grey-label text-center col-12">More products</p>                        
                            <div class="product_content col-12">

                                <?php
                                    $test = mysqli_query($mysqli,"SELECT *,product_category.product_type,product.name FROM category LEFT JOIN product ON category.category_product = product.id LEFT JOIN product_category ON category.brands = product_category.id WHERE brands = $productBrand");                                        
                                    while ($row = mysqli_fetch_array($test)) {                        
                                    if( $row['product_name'] != $productName ){
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
                                    }
                                ?>

                                                    
                            </div>
                    
                        </div>

                    </div>
                <?php
                    }
                ?>

        </div>        

    </section>

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

<script src="scripts/home.js"></script>
<!-- <script src="scripts/topnav.js"></script> -->
</body>
</html>