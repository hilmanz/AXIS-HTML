jQuery(document).ready(function($) {
		/*------------POP UP------------*/	
		jQuery("a.showPopup").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(targetID).fadeIn();
			jQuery(targetID).addClass('visible');
			jQuery("#bgPopup").fadeIn();
		});
		/*------------HEADING SCROLL------------*/	
		$(window).scroll(function(){
			console.log($(window).scrollTop());
			if($(window).scrollTop()<=50){
				$('#head').removeClass('boxShadow');
			}else{
				$('#head').addClass('boxShadow');
			}
			if($(window).scrollTop()>=300){
				$('.panduan1,.produk1,.box1').addClass("animated bounceInLeft");
			}
			if($(window).scrollTop()>=350){
				$('.panduan2,.produk2,.box2').addClass("animated bounceInRight");
			}
			if($(window).scrollTop()>=400){
				$('.panduan3,.produk3').addClass("animated bounceInLeft");
			}
			if($(window).scrollTop()>=450){
				$('.panduan4,.produk4').addClass("animated bounceInRight");
			}
			if($(window).scrollTop()>=500){
				$('.panduan5').addClass("animated bounceInLeft");
			}
		});
		/*------------POP UP------------*/	
		jQuery("a.showPopup").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(targetID).fadeIn();
			jQuery(targetID).addClass('visible');
			jQuery("#bgPopup").fadeIn();
		});
		$('.rating').jRating();
		 
});
$(document).ready(function(){
	/*------------ADD CLASS DETECT BROWSER------------*/ 
	$("body").addClass(BrowserDetect.browser); 
	jQuery('#bannerCarousel').jcarousel();
	jQuery('#newsCarousel').jcarousel({
		scroll: 1
	});
	$('.circleThumb a,.circles a img').hover(function(){
		$(this).addClass("animated flip");
	}, function() {
		$(this).removeClass("animated flip");
	});
	$('#hotPromo .boxPromo,#listStore .boxPromo').hover(function(){
		$(this).addClass("animated tada");
	}, function() {
		$(this).removeClass("animated tada");
	});
	$("a[rel=galeries]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		}
	});
});
$(function() {

	$('#da-slider').cslider({
		autoplay	: false,
		bgincrement	: 450
	});
	
	$( ".accordion" ).accordion({
		collapsible: true,
		heightStyle: "content"
	});
	$( "#produkDetailPage,#profileBoxTab,#boxNetworkTab" ).tabs();

	$('.scrollbar')
		.jScrollPane(
			{
				showArrows:false
			}
		);
});