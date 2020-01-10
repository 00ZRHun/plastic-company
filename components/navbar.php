<?php 
    include('config.php');
    

    $sql = mysqli_query($mysqli,"SELECT * FROM product_category");                                        
    $product_sql = mysqli_query($mysqli,"SELECT * FROM product");
    $logo_sql = mysqli_query($mysqli, "SELECT logo FROM about_us");

    $row_about = mysqli_fetch_array($logo_sql);

?>

<nav class="topnav" id="topNavBar">
    <div class="container">        
        
        <span class="collapse-mobile-show align-left">            
            <a class="align-left"><img src="images/<?php echo $row_about['logo']?>" alt="" id="logo"></a>
            <a id="icon" class="align-right"><i style="cursor:pointer" class="material-icons">menu</i></a>        
        </span>

        <span class="collapse-content">
            <?php 
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            ?>
                <a href="home.php" id="active">Home</a>  
                <!-- <a href="product.php">Product</a>                   -->                                
            <?php
            }
            // admin navbar
            else{                
            ?>
                <a href="adminHome.php" id="active">Home</a> 
                <!-- <a href="adminProduct.php">Product</a>  -->
            <?php
            } 
            ?>
                <div class="product-dropdown" onclick="showProductItems()">
                    Product
                    <div class="dropdown-items">
                    <?php 
                        while( $row = mysqli_fetch_array($product_sql))
                        {
                            echo '<a onclick="displayProduct('.$row["id"].')">'.$row["name"].'</a>';
                        }

                    ?>
                    </div>
                </div>

                <div class="brand-dropdown" onclick="showBrandItems()">
                    Brand
                    <div class="dropdown-items">
                    <?php 
                        while( $row = mysqli_fetch_array($sql))
                        {
                            echo '<a onclick="displayBrand('.$row["id"].')">'.$row["product_type"].'</a>';
                        }

                    ?>
                    </div>
                </div>                
                <a href="aboutUs.php">About us</a>
                <a href="contact.php">Contact</a>
                        
        </span>
        
    </div>
</nav>

<script src="../plastic/scripts/topnav.js"></script>
<script src="../plastic/scripts/displayBrand.js"></script>
