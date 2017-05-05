<?php
	$META_TITLE = 'Product - Axis';			// Meta Title
	$PAGE_ID = 'page-product';				// ID for the body tag
	include '_header.php';
?>
	
	<div class="page-header" data-role="header">
		<div class="branding"><a href="/" rel="external"><img src="assets/images/logo.jpg" alt="Axis, GSM yang baik" /></a></div>
		
		<div class="wrapper clear">
            <div id="language">
                <a class="flagen locale" href="javascript:void(0)" lid="2" >EN</a>
                <a class="flagid locale" href="javascript:void(0)" lid="1" >ID</a>
            </div><!-- end #language -->
			<div class="search-wrapper">
				<form name="search-form" class="search-form" method="post" action="">
					<div data-role="fieldcontain" class="input">
						<input type="search"  name="search-keyword" class="search-keyword" placeholder="Bisa dibantu? Cari disini..." />
					</div>
				</form>
			</div>
		</div>
		
		<div class="breadcrumb">
			<a href="">Product</a>	
		</div>
					
	</div><!-- /header -->
	
	<div class="page-body" data-role="content">
		
		<div class="promo">
			 <div class="flexslider">
				<ul class="slides">
					<li><a href=""><img src="assets/images/sample-product-1.jpg" alt="Telepon &amp; SMS" /></a></li>
					<li><a href=""><img src="assets/images/sample-banner-2.jpg" alt="internet gratis dg axis dan htc" /></a></li>
					<li><a href=""><img src="assets/images/sample-banner-3.jpg" alt="internet gratis dg axis dan htc" /></a></li>
				</ul>
			</div>
		</div>
		
		<script type="text/javascript">
		    $('#page-product').live( 'pageshow', function(e){
		        $('.flexslider').flexslider({
		        	controlNav: false,
		        	slideshowSpeed: 10000,
					animation: "slide"
				});
		    });
		</script>

		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
				<li>
					<a href="product-internet.php" data-transition="slide">
						<span class="icon icon-globe"></span>
						Internet
					</a>
				</li>
				<li>
					<a href="" data-transition="slide">
						<span class="icon icon-device"></span>
						Telepon &amp; SMS
					</a>
				</li>
				<li>
					<a href="" data-transition="slide">
						<span class="icon icon-box-closed"></span>
						Bundling Device
					</a>
				</li>
				<li>
					<a href="" data-transition="slide">
						<span class="icon icon-card"></span>
						Kartu
					</a>
				</li>
				<li>
					<a href="index.php" data-transition="slide" data-rel="back">
						<span class="icon icon-home"></span>
						Back To Home
					</a>
				</li>
			</ul>
		</div>
	</div><!-- /content -->

<?php
	include '_footer.php';
?>