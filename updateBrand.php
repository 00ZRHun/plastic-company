<?php

include('components/config.php');

// Initialize message variable
$msg = "";

// If brand edit button is clicked ...
if (isset($_POST['edit'])) {
        
    // New name from input
    $replaceBrand = mysqli_real_escape_string($mysqli,$_POST['replace_brand']);        
    
    // ID from Option 
    $brand = $_POST['brand'];    

    
    if( $replaceBrand )
    {                              
        
        $sql = "UPDATE product_category SET product_type = '$replaceBrand' WHERE id = '$brand'";
        
        if( $mysqli->query($sql) === true)          
        {                                    
            // echo $type;
            // echo $replaceType;
            echo "<script>alert('Type has been edited.')</script>";
            echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";            
        }
    }    

    else
    {
        echo "<script>alert('Please fill up all information.')</script>";
        echo "<script>setTimeout(\"window.location.assign('editBrand.php');\",1000);</script>";
    }
}

// If product edit button is clicked ...
if (isset($_POST['editProduct'])) {
        
    // New name from input
    $replaceProduct = mysqli_real_escape_string($mysqli,$_POST['replace_product']);        
    
    // ID from Option 
    $product = $_POST['product'];    

    
    if( $replaceProduct )
    {                              
        
        $sql = "UPDATE product SET name = '$replaceProduct' WHERE id = '$product'";
        
        if( $mysqli->query($sql) === true)          
        {                                                
            echo "<script>alert('Product has been edited.')</script>";
            echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";            
        }
    }    

    else
    {
        echo "<script>alert('Please fill up all information.')</script>";
        echo "<script>setTimeout(\"window.location.assign('editBrand.php');\",1000);</script>";
    }
}

if (isset($_POST['delete'])) {        
    // ID from Option 
    $brand = $_POST['brand'];        

    $sql = "DELETE FROM product_category WHERE id = '$brand'";    
    if( $mysqli->query($sql) === true)          
    {           
        echo "<script>alert('Brand has been deleted.')</script>";
        echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";                
    }    
}

if (isset($_POST['deleteProduct'])) {        
    // ID from Option 
    $product = $_POST['product'];        

    $sql = "DELETE FROM product WHERE id = '$product'";    
    if( $mysqli->query($sql) === true)          
    {           
        echo "<script>alert('Product has been deleted.')</script>";
        echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";                
    }    
}

$mysqli -> close();

?>