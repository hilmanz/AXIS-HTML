<?php
	$META_TITLE = 'Axis Pro - Axis';			// Meta Title
	$PAGE_ID = 'page-product-axis-pro';			// ID for the body tag
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
		
		<div class="page-image-heading">
			<img src="assets/images/heading-axis-pro.jpg" alt="Paket andalan buat kamu yang doyan internet non-stop seharian" />
		</div>
		
		<div class="page-meta">
			<h1 class="page-title"><span class="icon"></span>AXIS PRO</h1>
			
			<div class="page-content clear">
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit, libero sed facilisis vehicula, mauris mi dictum turpis, vel eleifend nisl metus id mi. Nulla leo sem, lobortis in pellentesque sit amet, auctor in orci. Aenean tristique dui vitae eros facilisis volutpat. Pellentesque ac lacinia urna. Nulla eget sem vel diam tincidunt mattis. Aenean ac ipsum nisl. Vestibulum diam purus, euismod sed gravida nec, convallis vel eros. Pellentesque quis nunc tortor. Mauris nec nulla diam, et ullamcorper metus. Praesent porttitor ligula nec lorem varius sit amet egestas urna facilisis. Maecenas enim neque, semper ut ultricies sed, tempus sed risus. Duis vitae nisl dolor. Vivamus interdum, diam sit amet facilisis cursus, metus libero consectetur nibh, vel lacinia tortor nisl fringilla purus. Phasellus in lacus a sapien laoreet tincidunt eu non tortor.</p>
				</article>
			</div>
		</div>
		
		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
				<li>
					<a href="product-internet.php" data-transition="slide" data-rel="back">
						<span class="icon icon-plus"></span>
						Produk Internet Lainnya
					</a>
				</li>
				<li>
					<a href="product.php" data-transition="slide">
						<span class="icon icon-home"></span>
						Back To Produk
					</a>
				</li>
			</ul>
		</div>
	</div><!-- /content -->

<?php
	include '_footer.php';
?>