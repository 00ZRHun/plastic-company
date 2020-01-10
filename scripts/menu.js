
$(document).ready(function(){
			var menu = $('.menu');
			if(menu.length > 0){
				menu.each(function(){
					var accordion = $(this);
					accordion.on('change', 'input[type="checkbox"]' ,function(){
						var checkbox = $(this);
						console.log(checkbox.prop('checked'));
						( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style','display:none;').slideDown(300) : checkbox.siblings('ul').attr('style','display:block;').slideUp(300);
					});
				});
			}
		});

