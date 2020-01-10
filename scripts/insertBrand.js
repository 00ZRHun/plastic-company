$(".product-pane").hide();
$(".orders-pane").hide();
$('.contact-pane').hide();

let brandTab = document.getElementById('brandTab');
let productTab = document.getElementById('productTab');
let ordersTab = document.getElementById('ordersTab');
let contactTab = document.getElementById('contactTab');
let footerTab = document.getElementById('footerTab');
let aboutTab = document.getElementById('aboutTab');

brandTab.addEventListener('click',()=>{
    $(".orders-pane").hide();
    $(".brand-pane").show();
    $(".product-pane").hide();
    $(".contact-pane").hide();

    $('#contactTab').removeClass("currentTab");
    $('#ordersTab').removeClass("currentTab");
    $('#brandTab').addClass("currentTab");
    $('#productTab').removeClass("currentTab");
    $('#footerTab').removeClass("currentTab");
    $('#aboutTab').removeClass("currentTab");
});

productTab.addEventListener('click',()=>{
    $(".orders-pane").hide();
    $(".brand-pane").hide();
    $(".product-pane").show();
    $(".contact-pane").hide();

    $('#contactTab').removeClass("currentTab");
    $('#ordersTab').removeClass("currentTab");
    $('#brandTab').removeClass("currentTab");
    $('#productTab').addClass("currentTab");
    $('#footerTab').removeClass("currentTab");
    $('#aboutTab').removeClass("currentTab");
});

ordersTab.addEventListener('click',()=>{
    $(".orders-pane").show();
    $(".brand-pane").hide();
    $(".contact-pane").hide();
    $(".product-pane").hide();
    $('#ordersTab').addClass("currentTab");
    $('#contactTab').removeClass("currentTab");
    $('#brandTab').removeClass("currentTab");
    $('#productTab').removeClass("currentTab");
    $('#footerTab').removeClass("currentTab");
    $('#aboutTab').removeClass("currentTab");
});

contactTab.addEventListener('click',()=>{
    $(".orders-pane").hide();
    $(".brand-pane").hide();
    $(".product-pane").hide();
    $(".contact-pane").show();

    $('#contactTab').addClass("currentTab");
    $('#ordersTab').removeClass("currentTab");
    $('#brandTab').removeClass("currentTab");
    $('#productTab').removeClass("currentTab");
    $('#footerTab').removeClass("currentTab");
    $('#aboutTab').removeClass("currentTab");
});

footerTab.addEventListener('click',()=>{
    $(".orders-pane").hide();
    $(".brand-pane").hide();
    $(".product-pane").hide();
    $('#ordersTab').removeClass("currentTab");
    $('#brandTab').removeClass("currentTab");
    $('#productTab').removeClass("currentTab");
    $('#footerTab').addClass("currentTab");
    $('#aboutTab').removeClass("currentTab");
    setTimeout("location.href ='footerAdmin.php';",100);
});

aboutTab.addEventListener('click',()=>{
    $(".orders-pane").hide();
    $(".brand-pane").hide();
    $(".product-pane").hide();
    $('#ordersTab').removeClass("currentTab");
    $('#brandTab').removeClass("currentTab");
    $('#productTab').removeClass("currentTab");
    $('#footerTab').removeClass("currentTab");
    $('#aboutTab').addClass("currentTab");
    setTimeout("location.href ='aboutUsAdmin.php';",100);
});