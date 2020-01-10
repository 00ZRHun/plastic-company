<?php

include('components/config.php');

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['edit'])) {
    
    // Get image,product_name,packaging_size
    $image = $_FILES['image']['name'];        
    $product_name = mysqli_real_escape_string($mysqli,$_POST['product_name']);    
    $packaging_size = mysqli_real_escape_string($mysqli,$_POST['packaging_size']);   
    $packaging = mysqli_real_escape_string($mysqli,$_POST['packaging']);   
    $product_model = mysqli_real_escape_string($mysqli,$_POST['product_model']);
    $product_description = mysqli_real_escape_string($mysqli,$_POST['product_description']);
    $product_price = $_POST['product_price'];
    $brand = $_POST['brand'];
    $product = $_POST['product'];

    // image file directory
    $target = "uploads/".basename($image);


    if( $product_name && $packaging_size && $image && $product && $brand && $product_price && $product_model)
    {      
        $sql = mysqli_query($mysqli,"SELECT product_image FROM category WHERE product_name='$product_name' ");                                                                    
        $row = mysqli_fetch_array($sql);
        $defaultImage = $row['product_image'];
        $Path = 'uploads/'.$defaultImage;
        chown($Path,666);
        $sql = "UPDATE category SET category_product='$product',product_price = '$product_price', product_image = '$image', product_size = '$packaging_size', brands = '$brand', description = '$product_description', model = '$product_model', packaging = '$packaging' WHERE product_name = '$product_name'";
        
        if( $mysqli->query($sql) === true)          
        {            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
                unlink($Path);
                echo "<script>alert('Item has been edited.')</script>";
                echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";
            }
        }
    }

    else if( $product_name && $packaging_size && $brand && $product && $product_model && $product_price)
    {        
        $sql = "UPDATE category SET category_product='$product', product_price='$product_price', product_size = '$packaging_size', brands = '$brand', description = '$product_description', model = '$product_model', packaging = '$packaging' WHERE product_name = '$product_name'";
        if( $mysqli->query($sql) === true)          
        {                                    
            echo "<script>alert('Item has been edited.')</script>";
            echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";            
        }
    }

    else
    {
        echo "<script>alert('Please fill up all information.')</script>";
        echo "<script>setTimeout(\"window.location.assign('editProduct.php?productName=$product_name');\",1000);</script>";
    }
}

$mysqli -> close();

?>