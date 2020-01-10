function displayDetail(s)
{
    window.location.assign("detail.php?productName="+s);
    // alert(s);
}

function editDetail(s)
{    
    window.location.assign("editProduct.php?productName="+s);
    // alert(s);
}


function deleteProduct(s)
{    
    window.location.assign("deleteProduct.php?productName="+s);
}

function uploadProduct()
{
    setTimeout("location.href ='uploadProduct.php';");
}

function logout()
{    
    let r = confirm("Are you sure you want to logout?");
    if (r == true) {
        location.href='logout.php';
    } 

}



// let icon = document.getElementById('icon');



// icon.addEventListener('click',()=>{        
//     $(".collapse-content").slideToggle();        
// });










