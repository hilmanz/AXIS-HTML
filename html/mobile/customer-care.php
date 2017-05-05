<?php
	$META_TITLE = 'Perlu Bantuan? - Axis';								// Meta Title
	$PAGE_ID = 'page-customer-care';									// ID for the body tag
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
			<a href="customer-care.php">Customer Care</a>	
		</div>
					
	</div><!-- /header -->
	
	<div class="page-body" data-role="content">
		
		<div class="page-image-heading">
			<img src="assets/images/heading-customer-care.jpg" alt="Perlu bantuan?" />
		</div>
		
		<div class="page-meta">
			<h1 class="page-title"><span class="icon"></span>PERLU BANTUAN?</h1>
		
			<div class="page-content clear">
                <div class="customerbox">
                    <div class="entry">
                        <h1>BANTUAN Melalui Telepon</h1>
                        <p>AXIS juga siap menjawab pertanyaanmu kapanpun kamu perlukan. <br />Hubungi aja nomor layanan pelanggan AXIS yang disediakan.</p>
                    </div><!-- end .entry -->
                    <span class="callNumber">838 <span class="white">atau</span> 0838 8000 838</span>
                </div><!-- end .customerbox -->
                <div class="entryTitle">
                    <h3>Tanya lewat Email</h3>
                    <p>Pertanyaanmu terlalu panjang buat diobrolin? Atau punya masukan? Email ke kami di <a href="mailto:cs@axisworld.co.id">cs@axisworld.co.id</a> atau bisa melalui form di bawah ini.</p>
                </div><!-- end .entryTitle -->
                <form class="theForm">
                    <div class="w300 rowBtns">
                        <input type="text" value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                        <input type="text" value="Email" onBlur="if(this.value=='')this.value='Email';" onFocus="if(this.value=='Email')this.value='';" />
                        <input type="text" value="Nomor Axis" onBlur="if(this.value=='')this.value='Nomor Axis';" onFocus="if(this.value=='Nomor Axis')this.value='';" />
                        <select class="styled">
                            <option>Propinsi</option>
                        </select>
                        <select class="styled">
                            <option>Kota</option>
                        </select>
                        <select class="styled">
                            <option>Jenis Pertanyaan</option>
                        </select>
                    </div>
                    <div class="w600">
                        <textarea></textarea>
                        <label><input type="checkbox" name="checkbox-0" /> Saya bersedia dihubungi melalui telepon</label>
                        <input type="submit" class="kirim" value="KIRIM" />
                    </div>
               </form>
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