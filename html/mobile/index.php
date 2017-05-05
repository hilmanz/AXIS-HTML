<?php
	$META_TITLE = 'Axis - GSM Yang Baik';			// Meta Title
	$PAGE_ID = 'page-home';							// ID for the body tag
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
		
	</div><!-- /header -->
	
	<div class="page-body" data-role="content">
		
		<div class="promo">
			<div class="flexslider">
				<ul class="slides">
					<li><a href=""><img src="assets/images/sample-banner-1.jpg" alt="internet gratis dg axis dan htc" /></a></li>
					<li><a href=""><img src="assets/images/sample-banner-2.jpg" alt="internet gratis dg axis dan htc" /></a></li>
					<li><a href=""><img src="assets/images/sample-banner-3.jpg" alt="internet gratis dg axis dan htc" /></a></li>
				</ul>
			</div>
		</div>
		
		<script type="text/javascript">
		    $('#page-home').live( 'pageshow', function(e){
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
					<a href="panduan-aktivasi-kartu-perdana.php" data-transition="slide">
						<span class="icon icon-question"></span>
						Pakai AXIS
					</a>
				</li>
				<li>
					<a href="product.php" data-transition="slide">
						<span class="icon icon-box"></span>
						Terbaik dari AXIS
					</a>
				</li>
				<li>
					<a href="hot.php" data-transition="slide">
						<span class="icon icon-love"></span>
						Lagi Trend
					</a>
				</li>
				<li>
					<a href="life.php" data-transition="slide">
						<span class="icon icon-bubble"></span>
						AXISKU
					</a>
				</li>
				<li>
					<a href="customer-care.php" data-transition="slide">
						<span class="icon icon-tools"></span>
						Ask AXIS
					</a>
				</li>
			</ul>
		</div>
	</div><!-- /content -->

<?php
	include '_footer.php';
?>