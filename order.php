<?php

include('components/config.php');

// If upload button is clicked ...
if (isset($_POST['submit'])) {
        
    $customer_name = mysqli_real_escape_string($mysqli,$_POST['name']);   
    $company_name = mysqli_real_escape_string($mysqli,$_POST['company_name']);   
    $product_interested = mysqli_real_escape_string($mysqli,$_POST['product_interested']);   
    $product_quantity = $_POST['product_quantity'];
    $customer_email = $_POST['guest_email'];    
    $customer_phone = $_POST['guest_phone'];
    $message = $_POST['message'];
//    $product = $_POST['product'];/
        
    
    if (!is_numeric($customer_phone) && !is_numeric($product_quantity)) {
        echo "<script>alert(\"Phone number cant contain alphabet.\")</script>";
        echo "<script>setTimeout(\"location.href ='home.php';\",1000);</script>";    
    }

    else{

    if(strpos($product_interested,"#") !== false || strpos($product_interested,"'") !== false || strpos($product_interested,'"') !== false)
    {
        echo "<script>alert(\"Product name cant have # and single double quotes.\")</script>";
        echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";    
    }

    else{

        if( $customer_name && $company_name && $product_interested && $product_quantity && $customer_email && $customer_phone && $message)
        {        
            $sql = "INSERT INTO customer ( name, company_name , ordered_product, ordered_quantity, email, number, messages) 
            VALUES ('$customer_name', '$company_name' ,'$product_interested', '$product_quantity', '$customer_email','$customer_phone','$message')";            
            if( $mysqli->query($sql) === true)          
            {                            
                echo "<script>alert('Your request is sent successfully.')</script>";
                echo "<script>setTimeout(\"location.href ='home.php';\",1000);</script>";                    
            }

            else
                echo "<script>alert('There is something wrong... Please retry again')</script>";

            
            /*
            else
            #{
                echo "<script>alert('$product_name is already existed, please insert a new name.')</script>";
                echo "<script>setTimeout(\"location.href ='uploadProduct.php';\",1000);</script>";
            }*/
        }

        else
        {
            echo "<script>alert('Please fill up all information')</script>";            
        }
    }
    }
}

if (isset($_POST['contact-submit'])) {
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];    
    $phone = $_POST['contact-phone'];
    $message = $_POST['contact-message'];

    if (!is_numeric($phone)) {
        echo "<script>alert(\"Phone number cant contain alphabet.\")</script>";
        echo "<script>setTimeout(\"location.href ='contact.php';\",1000);</script>";    
    }

    else
    {
        if( $name && $email && $phone && $message)
        {
            $sql = "INSERT INTO contact ( name, email, number , message )
            VALUES ('$name', '$email' ,'$phone', '$message')";            
            if( $mysqli->query($sql) === true)          
            {                            
                echo "<script>alert('Your message is sent successfully.')</script>";
                echo "<script>setTimeout(\"location.href ='home.php';\",1000);</script>";                    
            }

            else
                echo "<script>alert('There is something wrong... Please retry again')</script>";
        }

        else
        {
            echo "<script>alert('Please fill up all information')</script>";            
        }
    }
}

$mysqli -> close();

?>