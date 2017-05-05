jQuery(document).ready(function($) {
		/*------------POP UP------------*/	
		jQuery("a.showPopup").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(targetID).fadeIn();
			jQuery(".ui-overlay").fadeIn();
			$('html, body').animate({scrollTop: '0px'}, 800);
			return false;
		});
		jQuery("a.showPopup2").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(targetID).fadeIn();
			jQuery(".ui-overlay").fadeIn();
			return false;
		});
		jQuery(".ui-overlay").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(".popup").fadeOut();
			jQuery(".ui-overlay").fadeOut();
			return false;
		});
		/*------------TAB STORE------------*/
		jQuery('.tab_content:first-child').addClass("tabActive");	
		jQuery(".tabStore a").click(function(){
			jQuery(".tabStore li").removeClass("active");	
			jQuery(this).parent(".tabStore li").addClass("active");	
			var targetID = jQuery(this).attr('href');
			jQuery(".tab_content").fadeOut();
			jQuery(".tab_content").removeClass("tabActive");
			jQuery(targetID).addClass("tabActive");	
			jQuery(targetID).fadeIn();
			return false;
		});
		/*------------FAQ------------*/	
		jQuery(".listexpander li").click(function(){
			jQuery(".listexpander li").removeClass("active");
			jQuery(".listexpander ul").removeClass("active");	
			jQuery(this).find('ul').addClass("active");	
			jQuery(this).addClass("active");	
			return false;
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
		/*------------RATING------------*/	
		$('.rating').jRating();
		/*------------SUBMENU------------*/	
		$('#nav li a.submenu').hover(function(){
			$("#subMenu").stop().animate({top:'160'},{queue:false,duration:300});
			$("#subMenu").show();
			$('#nav li a.submenu').addClass("current");
		}, function() {
			$("#subMenu").stop().animate({top:'0'},{queue:false,duration:300});
			$("#subMenu").fadeOut();
			$('#nav li a.submenu').removeClass("current");
		});
		$('#subMenu').hover(function(){
			$("#subMenu").stop().animate({top:'160'},{queue:false,duration:300});
			$("#subMenu").show();
			$('#nav li a.submenu').addClass("current");
		}, function() {
			$("#subMenu").stop().animate({top:'0'},{queue:false,duration:300});
			$("#subMenu").fadeOut();
			$('#nav li a.submenu').removeClass("current");
		});
		$("a.subInternet").hover(function(){
			$(".bannerNav").hide();
			$("#internetBanner").show();
		});
		$("a.subTelepon").hover(function(){
			$(".bannerNav").hide();
			$("#teleponBanner").show();
		});
		$("a.subBundling").hover(function(){
			$(".bannerNav").hide();
			$("#bundlingBanner").show();
		});
		$("a.subKartu").hover(function(){
			$(".bannerNav").hide();
			$("#kartuBanner").show();
		});
		
		 
});
$(document).ready(function(){
	/*------------ADD CLASS DETECT BROWSER------------*/ 
	$("body").addClass(BrowserDetect.browser); 
	jQuery('#bannerCarousel').jcarousel();
	jQuery('#newsCarousel').jcarousel({
		scroll: 1
	});
	$('#hotPromo .boxPromo,#listStore .boxPromo').hover(function(){
		$(this).addClass("animated tada");
	}, function() {
		$(this).removeClass("animated tada");
	});
});
$(function() {

	$('#da-slider').cslider({
		autoplay	: true,
		bgincrement	: 450
	});
	
	$( ".accordion" ).accordion({
		collapsible: true,
		heightStyle: "content"
	});
	$( "#produkDetailPage,#profileBoxTab,#boxNetworkTab,#storeTab,#tabsingle" ).tabs();

	$('.scrollbar')
		.jScrollPane(
			{
				showArrows:false
			}
		);
	 $(function() {
        $( ".entryDetail .popupContent" ).draggable();
    });	
});