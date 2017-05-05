<?php
	$META_TITLE = 'Internet - Axis';			// Meta Title
	$PAGE_ID = 'page-product-internet';			// ID for the body tag
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
			<a href="product.php">Product</a><span> > </span><a href="product-internet.php">Internet</a>	
		</div>
					
	</div><!-- /header -->
	
	<div class="page-body" data-role="content">
		
		<div class="page-meta">
			<h1 class="page-title">Internet Highlights</h1>
			
			<div class="page-excerpt">
				<p>
					Browsing, streaming, download, eksis di social media, <br />
					hingga layanan internet untuk BlackBerry &reg;, <br />
					semuanya lebih seru kalo pake AXIS.
				</p>	
			</div>
		</div>
		
		<div class="page-content" class="clear">
			<div id="product-category-list" class="page-content-list">
				<ul data-role="listview" data-inset="true">
					<li>
						<a href="product-axis-pro.php" data-transition="slide">
							<span class="text">AXIS PRO</span>
						</a>
					</li>
					<li>
						<a href="" data-transition="slide">
							<span class="icon icon-3d-glass"></span>
							<span class="text">Internet Gaul</span>
						</a>
					</li>
					<li>
						<a href="" data-transition="slide">
							<span class="icon icon-blackberry"></span>
							<span class="text">Blackberry</span>
						</a>
					</li>
					<li>
						<a href="" data-transition="slide">
							<span class="icon icon-globe2"></span>
							<span class="text">Internasional</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
				<li>
					<a href="product.php" data-transition="slide" data-rel="back">
						<span class="icon icon-trolly"></span>
						Produk Lainnya
					</a>
				</li>
				<li>
					<a href="index.php" data-transition="slide" data-url="index.php">
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