 
			$(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				
			//drop down menu	
					$(".drop-down").hover(function() {
						$('.mega-menu').addClass('display-on');
					});
					$(".drop-down").mouseleave(function() {
						$('.mega-menu').removeClass('display-on');
					});
					$(".drop-down2").hover(function() {
						$('.mega-menu2').addClass('display-on');
					});
					$(".drop-down2").mouseleave(function() {
						$('.mega-menu2').removeClass('display-on');
					});
			
			});