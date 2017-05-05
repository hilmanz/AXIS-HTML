<?php
	$META_TITLE = 'Axis Life Film - Axis';			// Meta Title
	$PAGE_ID = 'page-life-film';					// ID for the body tag
	$PAGE_CLASS = 'page-life-category';				// Class for the body tag
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
			<h1 class="page-title"><span class="icon"></span>Film</h1>
			
			<div class="page-excerpt">
				<p>
					Buat kamu yang gila film, jangan lewatkan <br /> 
					semua review dan info terbaru seputar <br />
					film-film paling seru  di sini. 
				</p>	
			</div>
		</div>
		
		<div class="page-content clear">
			<div id="life-film-list" class="page-content-list">
				<ul data-role="listview" data-inset="true">
					<li>
						<a href="life-film-detail.php" data-transition="slide" title="PARANORMAN: REVOLUSI TEKNIK STOP-MOTION">
							<img src="assets/images/thumb-life-film-1.jpg" title="" class="thumbnail" />
							<span class="icon icon-cam"></span>
							<span class="text">PARANORMAN: REVOLUSI TEKNIK STOP-MOTION</span>
						</a>
					</li>
					<li>
						<a href="life-film-detail.php" data-transition="slide" title="STAN LEE MEDIA GUGAT DISNEY ATAS HAK CIPTA">
							<img src="assets/images/thumb-life-film-2.jpg" title="" class="thumbnail" />
							<span class="icon icon-cam"></span>
							<span class="text">STAN LEE MEDIA GUGAT DISNEY ATAS HAK CIPTA</span>
						</a>
					</li>
					<li>
						<a href="life-film-detail.php" data-transition="slide" title="LINCOLN DIUNGGULKAN RAIH OSCAR">
							<img src="assets/images/thumb-life-film-3.jpg" title="" class="thumbnail" />
							<span class="icon icon-cam"></span>
							<span class="text">"LINCOLN" DIUNGGULKAN RAIH OSCAR</span>
						</a>
					</li>
					<li>
						<a href="life-film-detail.php" data-transition="slide" title="JK ROWLING BERJANJI MENULIS BUKU ANAK">
							<img src="assets/images/thumb-life-film-4.jpg" title="" class="thumbnail" />
							<span class="icon icon-cam"></span>
							<span class="text">JK ROWLING BERJANJI MENULIS BUKU ANAK</span>
						</a>
					</li>
				</ul>
			</div>
            <div class="paging">
                <a class="prev" href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#" class="current">4</a>
                <a class="next" href="#">&raquo;</a>
            </div><!-- end .paging -->
		</div>
		
		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
				<li>
					<a href="life-film.php" data-transition="slide" data-rel="back">
						<span class="icon icon-plus"></span>
						Kategori Lainnya
					</a>
				</li>
				<li>
					<a href="index.php" data-transition="slide" data-url="/ndex.php">
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