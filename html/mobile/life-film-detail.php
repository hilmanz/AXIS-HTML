<?php
	$META_TITLE = 'Paranorman Revolusi Teknik Stop Motion - Axis';			// Meta Title
	$PAGE_ID = 'page-life-film-detail';										// ID for the body tag
	$PAGE_CLASS = 'page-life-category-detail';								// Class for the body tag
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
			<a href="life.php">Axis Life</a>	
		</div>
					
	</div><!-- /header -->
	
	<div class="page-body" data-role="content">
		
		<div class="page-meta">
			<h1 class="page-title"><span class="icon"></span>PARANORMAN: <br /><span style="color: #ee2b74;">REVOLUSI TEKNIK STOP MOTION</span></h1>
			
			<div class="page-image-heading">
				<img src="assets/images/heading-paranorman.jpg" alt="Paranorman : Revolusi teknik stop motion" />
			</div>
		</div>
		<div class="page-content clear">
			<article>
				<!-- 3 star rating -->
				<div class="rating">
					<span class="star"></span><span class="star"></span><span class="star"></span>
				</div>
				
				<p>Di zaman yang serba canggih seperti sekarang, kamu pasti sudah familiar dengan yang namanya teknik stop-motion animation dan tak lagi heran saat menyaksikan film-film brilian besutan Tim Burton yang diproses dengan teknik ini.</p>
				<p>Namun, apa yang dilakukan Laika Entertainment melalui film “Paranorman” bukan tidak mungkin akan mengembalikan raut muka keheranan kepada setiap orang yang menyaksikan.</p>
				<p>Tidak berlebihan rasanya jika pekerjaan mereka disebut sebagai revolusi teknik stop motion, karena seperti yang bisa dilihat melalui website www.paranorman.com, Laika Entertainment telah melakukan loncatan besar dengan membawa teknik ini ke level yang lebih tinggi.</p>
			</article>
			
			<div class="form-comment-wrapper">
				<form name="form-comment" method="post" action="">
					<div data-role="fieldcontain" class="input">
						<label for="comment">Beri komentar:</label>
						<textarea name="comment" id="comment"></textarea>
					</div>
				</form>
			</div>
			
			<div class="comment-list-wrapper">
				<ul class="comment-list">
					<li>
						<div class="avatar"><img src="assets/images/av-dilla.jpg" alt="Dilla S" /></div>
						<div class="commentary">
							<span class="comment-writer">Dilla S</span>
							<span class="comment-text">
								Gilak, nggak nyesel install game ini. Nyandu abis, dapetin bintang tiganya susah ih...
							</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
				<li>
					<a href="life-category.php" data-transition="slide" data-rel="back">
						<span class="icon icon-left-arrow"></span>
						Back To Kategori
					</a>
				</li>
				<li>
					<a href="life.php" data-transition="slide">
						<span class="icon icon-home"></span>
						Back To Axis Life
					</a>
				</li>
			</ul>
		</div>
	</div><!-- /content -->

<?php
	include '_footer.php';
?>