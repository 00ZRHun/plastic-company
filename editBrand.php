<!DOCTYPE html>
<html>
<head>
<title>Admin Panel | Edit brand</title>
<link rel="stylesheet" type="text/css" href="css/home.css">   
<link rel="stylesheet" href="css/reset.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<?php 
 // Initialize the session
 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>alert('You need permission to this page.')</script>";
    echo "<script>setTimeout(\"location.href ='adminLogin.php';\",1000);</script>";                        
    exit;
}
include('components/config.php');        
include('components/navbar.php');

// for delete selected item
if(empty($_REQUEST['item'])) {    
    // No items checked
    }
    else {    
        foreach($_REQUEST['item'] as $deleteID) {		
        $sql="DELETE from customer WHERE id='$deleteID'";        
            if( $mysqli->query($sql) === true)          
            {  
                echo "<script>alert('Order has been deleted.')</script>";
                echo "<script>setTimeout(\"location.href ='editBrand.php';\",1000);</script>";    
            }
            else
                echo "<script>alert('Error.')</script>";
        }
    }

// for delete selected item
if(empty($_REQUEST['contact'])) {    
    // No items checked
    }
    else {    
        foreach($_REQUEST['contact'] as $deleteID) {		
        $sql="DELETE from contact WHERE id='$deleteID'";        
            if( $mysqli->query($sql) === true)          
            {  
                echo "<script>alert('Contact has been deleted.')</script>";
                echo "<script>setTimeout(\"location.href ='editBrand.php';\",1000);</script>";    
            }
            else
                echo "<script>alert('Error.')</script>";
        }
    }

?>    

<div class="container insertBrand-container mx-auto">

<span class="selection-pane col-2 ml-auto">
    <button class="selection__tab currentTab" id="brandTab">Edit brand</button>
    <button class="selection__tab" id="productTab">Edit product</button>
    <button class="selection__tab" id="ordersTab">Customer orders</button>
    <button class="selection__tab" id="contactTab">Customer contact</button>
    <button class="selection__tab" id="footerTab">Edit footer</button>
    <button class="selection__tab" id="aboutTab">Edit about and logo</button>
</span>

<span class="col-7 mr-auto">

<!-- Brands -->
<form action="updateBrand.php" method="POST" class="brand-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Choose brand to edit</h1>

    <!-- Edit type -->
    <label for="brand">Choose brand :</label>
    <select name="brand" id="">

        <?php
            $test = mysqli_query($mysqli,"SELECT * FROM product_category");                                        
            while ($row = mysqli_fetch_array($test)) 
            {                        
        
            echo '<option value='.$row["id"].'>'.$row["product_type"].'</option>';
        
            }
        ?>
    </select>
    <!-- <small class="small" style="color:red">(#'") can't be existed in product name.</small> -->
  
    <label for="replace_brand">Replace with brand :</label>
    <input type="text" name="replace_brand" id=""/>

    <span class="container">
        <input type="submit" value="Edit" name="edit" class="submit-btn">
        <input type="submit" value="Delete" name="delete" class="submit-btn">
    </span>

</form>

<!-- Products -->
<form action="updateBrand.php" method="POST" class="product-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Choose product to edit</h1>

    <!-- Edit type -->
    <label for="product">Choose product :</label>
    <select name="product" id="">

        <?php
            $test = mysqli_query($mysqli,"SELECT * FROM product");                                        
            while ($row = mysqli_fetch_array($test)) 
            {                        
        
            echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
        
            }
        ?>
    </select>
    <!-- <small class="small" style="color:red">(#'") can't be existed in product name.</small> -->
  
    <label for="replace_product">Replace with product name :</label>
    <input type="text" name="replace_product" id=""/>

    <span class="container">
        <input type="submit" value="Edit" name="editProduct" class="submit-btn">
        <input type="submit" value="Delete" name="deleteProduct" class="submit-btn">
    </span>

</form>

<!-- Orders -->
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" class="orders-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Customer's orders</h1>

    <!-- Orders -->
    <div style="overflow-x:auto;">
    <table>
        <tr>
        <th>Name</th>
        <th>Company Name</th>
        <th>Ordered product</th>
        <th>Ordered quantity</th>
        <th>Email</th>
        <th>Number</th>
        <th>Messages</th>        
        </tr>

        <?php 
            $sql = mysqli_query($mysqli,"SELECT * FROM customer");                                                            
            while ($row = mysqli_fetch_array($sql)) {                    
        ?>
        <tr>
            <td><input type="checkbox" name="item[]" value="<?php echo 	$row["id"]; ?>" /><?php echo $row["name"]; ?></td>            
            <td><?php echo $row['company_name'] ?></td>
            <td><?php echo $row['ordered_product'] ?></td>
            <td><?php echo $row['ordered_quantity'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['messages'] ?></td>       
        </tr>
        <?php
        }
        ?>
        <tr>
			<td align="right" colspan="6"><input type="submit" value="delete" class="submit-btn" Onclick="return ConfirmDelete()" />
			</td>
		</tr>	

    </table>
    </div>

</form>

<!-- Orders -->
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" class="contact-pane admin-form" enctype="multipart/form-data">

    <h1 class="header">Customer's orders</h1>

    <!-- Orders -->
    <div style="overflow-x:auto;">
    <table>
        <tr>
        <th>Name</th>     
        <th>Email</th>
        <th>Number</th>
        <th>Messages</th>        
        </tr>

        <?php 
            $sql = mysqli_query($mysqli,"SELECT * FROM contact");                                                            
            while ($row = mysqli_fetch_array($sql)) {                    
        ?>
        <tr>
            <td><input type="checkbox" name="contact[]" value="<?php echo 	$row["id"]; ?>" /><?php echo $row["name"]; ?></td>                        
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['message'] ?></td>       
        </tr>
        <?php
        }
        ?>
        <tr>
			<td align="right" colspan="6"><input type="submit" value="delete" class="submit-btn" Onclick="return ConfirmDelete()" />
			</td>
		</tr>	

    </table>
    </div>

</form>

</span>

</div>

<!-- ------------------------- FooterMainSection ---------------------------------->
<?php
	include_once'firstFooter.php';
?>
<!-- ------------------------- Footer ---------------------------------->
			
<?php
	include_once'footer.php';
?>


<script src="scripts/adminHome.js"></script>
<script src="scripts/insertBrand.js"></script>
<script>
    function ConfirmDelete() {      
    
    }

</script>
<!-- <script src="scripts/topnav.js"></script> -->
</body>
</html>
