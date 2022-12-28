$(document).ready(function(){
	
	$('html,body').css('overflow','auto');


	$('.menu-submenu').click(function(e){
		e.stopPropagation();
		$('.submenu').slideToggle();
	})

	$('.menu-submenu-desktop').click(function(){
		$('.submenu-desktop').slideToggle();
	})

	$('.icone-menu').click(function(e){
		e.stopPropagation();
		var ul = $('.menu-mobile').find('ul');
		if($('.menu-mobile').find('ul').is(':visible')){
			console.log('escondido');
			ul.css('display','none');
			$('.icone-menu').css('background-image','url(img/menu.png)');
			$('html,body').css('overflow','auto');
		}else{
			console.log('visivel');
			ul.css('display','block');
			$('.icone-menu').css('background-image','url(img/menu-open.png)');
			$('html,body').css('overflow','hidden');
		}
		//$('html,body').css('overflow','auto');
		
	})

	$('body').click(function(e){
		e.stopPropagation();
		var ul = $('.menu-mobile').find('ul');
		ul.css('display','none');
		$('.icone-menu').css('background-image','url(img/menu.png)');
		$('html,body').css('overflow','auto');
	})
})