$(function($) {
	
	$.extend ({
	
		LOGIN : {
		
			Initialize : function() {
			},
			
			
		}
	});
	
	$('form').find('input[type=text]').filter(':visible:first').focus().select();
	
	$(document).on('click', '._login-btn', function() {
		
		if($(this).hasClass('_login-updates-btn'))
			$('._login-updates').fadeIn();
		else if($(this).hasClass('_login-settings-btn')) 
			$('._login-settings').fadeIn();
		else if($(this).hasClass('_login-accounts-btn'))
			$('._login-accounts').fadeIn();
		
	});
	
	$(document).on('click', 'ul._login-settings-background li', function() {
		
		$('ul._login-settings-background li').css({
			'font-weight' : 'normal',
			'color' : '#F7F7F7'
		});
		
		var _element = $(this).attr('class');
		
		$('.' + _element).css({
			'font-weight' : 'bold',
			'color' : '#21F710'
		});
		
		var background = '-background_1.jpg';
		
		switch(_element) {
			case '_bg-1' : default :
				background = '-background_1.jpg';
				break;
			case '_bg-2' : 
				background = '-background_2.jpg';
				break;
			case '_bg-3' :
				background = '-background_3.jpg';
				break;
			case '_bg-4' :
				background = '-background_4.jpg';
				break;
			case '_bg-5' :
				background = '-background_5.jpg';
				break;
			case '_bg-6' :
				background = '-background_6.jpg';
				break;
			case '_bg-7' :
				background = '-background_7.jpg';
				break;
		}
		
		$('body').css({
			'background' : 'url("' + BASEURL + 'assets/templates/webos/images/' + background + '")',
			'background-repeat' : 'no-repeat' 
		});
	});
});