<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a href="index.php?menu=Coverage">Coverage</a></h1>
</div><!-- end #breadcumb -->
<div id="headBanner" class="mapContainer">
    <div class="boxMap">
    	 <div class="title">
         	<h1 class="labelAxis">AXIS Makin Dekat Dengan Rakyat</h1>
         </div>
         <div class="theMap"><img src="content/map/large-map.jpg"/></div>
         <div class="shadow"></div>
    </div><!-- end .headBanner -->
</div><!-- end #headBanner -->
<div id="container">
    <div class="wrapper" id="lagiIn">
    	<div id="sidebar">
        	<div id="pilihWilayah" class="formBox">
            	<div class="headBox">
                	<h1 class="icon_wilayah">Pilih wilayahmu</h1>
                </div><!-- end .headBox -->
                <div class="entryBox">
                    <form class="pilihWilayah">
                    	<div class="rowBtns">
                    	<select class="styled"/>
                        	<option>Bali</option>
                        	<option>DKI Jakarta</option>
                        	<option>Surabaya</option>
                        </select>
                        </div>
                        <div class="rowBtns">
                    	<select class="styled"/>
                        	<option>Denpasar</option>
                        	<option>Jakarta Selatan</option>
                        </select>
                        </div>
                 	   <h3>Wow, AXIS udah eksis banget di kotamu!</h3>
                       <div class="chekedRow">
                       		<input type="checkbox"  class="styled" checked="checked"/>
                            <label>2G tersedia</label>
                       </div>
                       <div class="chekedRow checkPurple">
                       		<input type="checkbox" class="styled"/>
                            <label>3G tidak tersedia</label>
                       </div>
                    </form>
                </div><!-- end .entryBox -->
                <div class="shadow"></div>
            </div><!-- end #pilihWilayah -->
            <div class="textBox">
            	<p>Sebagai OPERATOR DENGAN PERTUMBUHAN TERCEPAT, AXIS selalu ngebuktiin<br />
                komitmennya buat memperluas jangkauan <br />
                dan meningkatkan kualitas jaringan.</p><br />
            	<h4>Kunjungi AXIS Shop terdekat untuk mendapatkan AXIS-mu segera</h4>
            </div><!-- end .textBox -->
        </div><!-- end #sidebar -->
        <div id="contents">
        	<div class="theTitle">
            	<h1 class="icon_house">Lokasi AXIS Shop</h1>
              	  <form class="rightShort">
                    <select onchange="select(this.value,2)" id="select1" name="data[select]" class="styled">
                      <option value="">-Daerah-</option>
                      <option value="64">Bali - Lombok</option>
                      <option value="26">Jabodetabek</option>
                      <option value="42">Jawa Barat</option>
                      <option value="55">Jawa Tengah</option>
                      <option value="41">Jawa Timur</option>
                      <option value="43">Sumatera </option>
                    </select>
                    </form>
            </div><!-- end .theTitle -->
            <div class="shadowCtop">
                <div id="location" class="shadowCbottom">
                	<div class="row">
                    	<div class="circles circle1">
                        	<a href="#popupMap" class="showPopup"><img src="content/map/map.jpg" /></a>
                        </div><!-- end .circles -->
                        <div class="entry">
                        	<h1>Plaza Ambassador</h1>
                            <p>Plaza Ambassador, Lt. Dasar, Unit No. 40-41<br />
                            Jl. Prof. Dr. Satrio<br />
                            Kuningan, Jakarta Selatan<br />
                            Senin - Minggu & Hari Libur Nasional, 10:00 - 20:00 WIB	</p>
                            <a class="detail showPopup" href="#popupMap">Detail</a>
                        </div><!-- end .entry -->
                    </div><!-- end .row -->
                	<div class="row">
                    	<div class="circles circle2">
                        	<a href="#popupMap" class="showPopup"><img src="content/map/map2.jpg" /></a>
                        </div><!-- end .circles -->
                        <div class="entry">
                        	<h1>Kelapa Gading</h1>
                            <p>Jl. Boulevard Barat LC 6 No.45<br />
                            Kelapa Gading Jakarta Utara<br />
                            Senin - Minggu : 10.00 - 19.00.</p>
                            <a class="detail showPopup" href="#popupMap">Detail</a>
                        </div><!-- end .entry -->
                    </div><!-- end .row -->
                	<div class="row">
                    	<div class="circles circle3">
                        	<a href="#popupMap" class="showPopup"><img src="content/map/map3.jpg" /></a>
                        </div><!-- end .circles -->
                        <div class="entry">
                        	<h1>Citraland Mall / Ciputra Mall</h1>
                            <p> Mal Citraland/Mal Ciputra, Lt. 4, no. B1<br />
                            Grogol, Jakarta Barat<br />
                            Senin - Minggu, 10:00 - 20:30 WIB </p>
                            <a class="detail showPopup" href="#popupMap">Detail</a>
                        </div><!-- end .entry -->
                    </div><!-- end .row -->
                </div><!-- end #location -->
            </div><!-- end .shadowCtop -->
            <div class="paging">
                <a class="prev" href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#" class="current">4</a>
                <a class="next" href="#">&raquo;</a>
            </div><!-- end .paging -->
        </div><!-- end #contents -->
    </div><!-- end #lagiIn -->
</div><!-- end #container -->
<?php include("popup_map.php"); ?>