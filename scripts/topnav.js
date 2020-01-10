
let icon = document.getElementById('icon');

icon.addEventListener('click',()=>{        
    $(".collapse-content").slideToggle();        
});

$(document).ready(function() {
			// grab the initial top offset of the navigation 
		   	var stickyNavTop = $('.topnav').offset().top;
		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('.topnav').addClass('fixnav');
			    } else {
			        $('.topnav').removeClass('fixnav'); 
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});

						
});

function showProductItems()
{
	$(".product-dropdown a").toggle(300);
}

function showBrandItems()
{
	$(".brand-dropdown a").toggle(300);
}
