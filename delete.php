<?php

include('components/config.php');


// If upload button is clicked ...
if (isset($_POST['delete'])) {
    
    //product_name    
    $product_name = $_POST['product_name'];            

    $sql = mysqli_query($mysqli,"SELECT product_image FROM category WHERE product_name='$product_name' ");                                                                    
    $row = mysqli_fetch_array($sql);
    $defaultImage = $row['product_image'];
    $Path = 'uploads/'.$defaultImage;
    chown($Path,666);

    $sql = "DELETE FROM category WHERE product_name = '$product_name'";    
    if( $mysqli->query($sql) === true)          
    {   
        unlink($Path);
        echo "<script>alert('Item has been deleted.')</script>";
        echo "<script>setTimeout(\"location.href ='adminHome.php';\",1000);</script>";                
    }    
}

$mysqli -> close();

?>