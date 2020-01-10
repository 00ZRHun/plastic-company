<?php

include('components/config.php');

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    
    // Get image,product_name,packaging_size
    $image = $_FILES['image']['name'];        
    // $name = $_POST['product_name'];        
    // $product_name = str_replace('#',"#",$name);    
    $product_name = mysqli_real_escape_string($mysqli,$_POST['product_name']);   
    $packaging_size = mysqli_real_escape_string($mysqli,$_POST['packaging_size']);   
    $packaging = mysqli_real_escape_string($mysqli,$_POST['packaging']);   
    $product_model = mysqli_real_escape_string($mysqli,$_POST['product_model']);
    $product_price = $_POST['product_price'];
    $product_description = mysqli_real_escape_string($mysqli,$_POST['product_description']);
    $brand = $_POST['brand'];
    $product = $_POST['product'];

    // image file directory
    $target = "uploads/".basename($image);   
    
    if (!is_numeric($product_price)) {
        echo "<script>alert(\"Product price cant contain alphabet.\")</script>";
        echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";    
    }

    else{

    if(strpos($product_name,"#") !== false || strpos($product_name,"'") !== false || strpos($product_name,'"') !== false)
    {
        echo "<script>alert(\"Product name cant have # and single double quotes.\")</script>";
        echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";    
    }

    else{

        if( $product_name && $product_price && $product && $packaging_size && $image && $brand && $packaging && $product_model && $product_description)
        {      
            $result = $mysqli->query("SELECT product_name FROM category WHERE product_name = '$product_name' AND brands='$brand'");
            if($result->num_rows == 0) 
            {

                $sql = "INSERT INTO category (product_name, product_price, product_image, product_size,category_product, model, brands, description, packaging) VALUES ('$product_name', '$product_price' ,'$image', '$packaging_size', '$product', '$product_model','$brand','$product_description','$packaging')";            
                if( $mysqli->query($sql) === true)          
                {            
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
                    {                
                        echo "<script>alert('Item has been uploaded.')</script>";
                        echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";                    
                    }
                }

            }

            else
            {
                echo "<script>alert('$product_name is already existed, please insert a new name.')</script>";
                echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";
            }
        }

        else
        {
            echo "<script>alert('Please fill up all information')</script>";
            echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";
        }
    }
    }
}

$mysqli -> close();

?>