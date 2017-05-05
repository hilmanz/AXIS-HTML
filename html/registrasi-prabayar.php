<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a>Registrasi Prabayar</a></h1>
</div><!-- end #breadcumb -->
<div id="container">
    <div class="wrapper" id="axisLife">
    	<div id="sidebar">
   			<?php include("widget/medium_banner.php"); ?>
        </div><!-- end #sidebar -->
        <div id="contents">
        	<div class="theTitle">
            	<h1 class="icon_register">Registrasi Prabayar</h1>
            </div><!-- end .theTitle -->
            <div class="shadowCtop">
            	<div class="shadowCbottom" style="height:345px;">
                    <div class="entryDetail">
							<h2>Selamat datang di Dunia AXIS.</h2> 
							<p>Sesuai dengan Peraturan Pemerintah, maka setiap pengguna layanan prabayar diwajibkan untuk melakukan registrasi.</p>
							<p>Daftarkan identitasmu sekarang dengan memasukkan nomor AXIS-mu pada kotak di bawah ini. Terima kasih.</p>
							<p class="example">cara penulisan nomor AXIS. 08388000838</p>
							<div class="input">
								<form class="theForm" accept-charset="utf-8" action="index.php?menu=registrasi-prabayar-form" method="post">							
                                	<p class="clear"><input type="text" onblur="if (this.value == '') {this.value = 'No. AXIS mu';}" onfocus="if (this.value == 'No. AXIS mu') {this.value = '';}" value="No. AXIS mu" class="inputnomoraxis" name="data[PrepaidRegistration][msisdn]">
                                    </p>
                                    <p class="clear"><input type="submit" class="reg reg-id" value="Mulai Daftar"></p>
								</form>
							</div>
                    </div><!-- end .entryDetail -->
                </div><!-- end .shadowCbottom -->
            </div><!-- end .shadowCtop -->
        </div><!-- end #contents -->
    </div><!-- end #axisLife -->
    <div class="widget-axisLife">
    <?php include("widget/carousel_banner.php"); ?>
    </div><!-- end .widget-whyAxis -->
</div><!-- end #container -->