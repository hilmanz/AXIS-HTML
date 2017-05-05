jQuery(document).ready(function($) {
		/*------------POP UP------------*/	
		jQuery("a.showpopup").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(targetID).fadeIn();
			jQuery("#bgpopup").fadeIn();
			$('html, body').animate({scrollTop: '0px'}, 800);
			return false;
		});
		jQuery("#bgpopup").click(function(){
			var targetID = jQuery(this).attr('href');
			jQuery(".popup").fadeOut();
			jQuery("#bgpopup").fadeOut();
			return false;
		});
		 
});