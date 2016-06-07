// JavaScript Document
$(document).ready(function(){
	$('ul#navTop ul').wrap('<div class="wrap-0" />').wrap('<div class="wrap-1" />').wrap('<div class="wrap-2" />');
	$('ul#navTop li ul li:last-child').addClass('last');
	
	/*$('ul#navTop li').hover(function(){
		$(this).find('.wrap-0').fadeIn();
		$(this).find('ul').fadeIn();
	},function (){
		$(this).find('.wrap-0').fadeOut();
		$(this).find('ul').fadeOut();
		}
	);*/
	
	$('#slider').bxSlider({
	 mode: 'fade',
	 speed: '5000',
	 pause: '4000',
	 controls:true,
	prevText: '',
	nextText:'',
	 infiniteLoop: true,
	 auto:true,
	 randomStart:true,
	 easing: 'swing',
	 hideControlOnEnd: false,
	 pager:false,
	 
	});
});
