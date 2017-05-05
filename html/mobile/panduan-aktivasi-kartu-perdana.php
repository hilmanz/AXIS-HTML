<?php
	$META_TITLE = 'Panduan aktivasi kartu perdana - Axis';			// Meta Title
	$PAGE_ID = 'page-manual-activation';							// ID for the body tag
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
		
		<div class="page-image-heading">
			<img src="assets/images/heading-why-axis.jpg" alt="Axis bakal ngasih kamu kelebihan-kelebihan tiada duanya" />
		</div>
		
		<div class="page-meta">
			<h1 class="page-title"><span class="icon"></span>PANDUAN AKTIVASI KARTU PERDANA</h1>
		
			<div class="page-content clear">
				<ul id="manual-activation">
					<li class="activation-step-1">
						<span class="thumb"></span>
						<div>
							<h3>Dapatkan Kartu AXIS-mu</h3>
							<p>Kartu Perdana AXIS tersedia di toko handphone dan AXIS Shop terdekat.</p>
						</div>
 					</li>
 					<li class="activation-step-2">
 						<div>
	 						<h3>Aktifkan Kartumu</h3>
	 						<p>Masukkan kartu AXIS-mu ke dalam handphone dan aktifkan.</p>
 						</div>
 						<span class="thumb"></span>
 					</li>
 					<li class="activation-step-3">
 						<span class="thumb"></span>
 						<div>
	 						<h3>Lakukan Registrasi</h3>
	 						<p>Masukkan data pribadi untuk registrasi. Kamu bisa juga registrasi dengan cara memilih menu AXIS di handphone-mu.</p>
	 					</div>	
 					</li>
 					<li class="activation-step-4">
 						<div>
	 						<h3>Restart Handphonemu</h3>
							<p>Matikan dan hidupkan kembali handphone-mu, lalu lakukan panggilan ke 888 atau ke nomor lain dan ikuti petunjuk sampai selesai. Pulsa perdana akan otomatis terisi dengan masa aktif 30 hari</p>
						</div>
						<span class="thumb"></span>
 					</li>
 					<li class="activation-step-5">
 						<span class="thumb"></span>
 						<div>
	 						<h3>Lakukan  Pengaturan</h3>
	 						<p>
	 							Lakukan setting WAP, MMS dan streaming melalui www.axisworld.co.id/devicesetting atau mengirimkan SMS ke 2288 dengan format: <br />
	 							DATA &lt;spasi&gt;
								MERK HANDPHONE&lt;spasi&gt;
								TIPE HANDPHONE <br />
								Contoh: DATA NOKIA N70
	 						</p>
	 					</div>	
 					</li>
				</ul>
			</div>
		</div>
		
		<div class="list-nav">
			<ul data-role="listview" data-inset="true">
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