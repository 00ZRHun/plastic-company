<?php

include('components/config.php');



// If upload button is clicked ...
if (isset($_POST['insert'])) {
         
    $insertedBrand = mysqli_real_escape_string($mysqli,$_POST['inserted_brand']);   

        if( $insertedBrand )
        {      
            $result = $mysqli->query("SELECT * FROM product_category WHERE product_type = '$insertedBrand'");
            if($result->num_rows == 0) 
            {

                $sql = "INSERT INTO product_category (product_type) VALUES ('$insertedBrand')";            
                if( $mysqli->query($sql) === true)          
                {                                           
                    echo "<script>alert('New brand has been uploaded.')</script>";
                    echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";                                        
                }

            }

            else
            {
                echo "<script>alert('$insertedBrand is already existed, please insert a new name.')</script>";
                echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";
            }
        }

        else
        {
            echo "<script>alert('Please fill up all information')</script>";
            echo "<script>setTimeout(\"location.href ='insertBrand.php';\",1000);</script>";
        }
    
}

if (isset($_POST['insertProduct'])) {
         
    $insertedProduct = mysqli_real_escape_string($mysqli,$_POST['inserted_product']);   

        if( $insertedProduct )
        {      
            $result = $mysqli->query("SELECT * FROM product WHERE name = '$insertedProduct'");
            if($result->num_rows == 0) 
            {

                $sql = "INSERT INTO product (name) VALUES ('$insertedProduct')";            
                if( $mysqli->query($sql) === true)          
                {                                           
                    echo "<script>alert('New product has been uploaded.')</script>";
                    echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";                                        
                }

            }

            else
            {
                echo "<script>alert('$insertedProduct is already existed, please insert a new name.')</script>";
                echo "<script>setTimeout(\"location.href ='insertBrand.php';\",1000);</script>";
            }
        }

        else
        {
            echo "<script>alert('Please fill up all information')</script>";
            echo "<script>setTimeout(\"location.href ='insertBrand.php';\",1000);</script>";
        }
    
}

$mysqli -> close();

?>