<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a href="index.php?menu=isi-ulang">Isi Ulang</a></h1>
</div><!-- end #breadcumb -->
<?php include("widget/slider-isiulang.php"); ?>
<div id="container">
    <div class="wrapper" id="lagiIn">
    	<div id="sidebar">
            <?php include("widget/medium_banner.php"); ?>
            <div class="textBox">
                <h5>Kamu bisa mendapatkan info outlet terdekat dengan menekan *123# dari AXIS mu</h5>
            </div><!-- end .textBox -->
        </div><!-- end #sidebar -->
        <div id="contents">
        	<div class="theTitle">
            	<h1 class="icon_connector">Lokasi Outlet Isi Ulang</h1>
            </div><!-- end .theTitle -->
            <div class="shadowCtop">
                <div id="location" class="shadowCbottom">
                          	<div class="rowSelect">
                            <select onchange="select(this.value,2)" id="select1" name="data[select]" class="styled">
                              <option value="">-Daerah-</option>
                              <option value="64">Bali - Lombok</option>
                              <option value="26">Jabodetabek</option>
                              <option value="42">Jawa Barat</option>
                              <option value="55">Jawa Tengah</option>
                              <option value="41">Jawa Timur</option>
                              <option value="43">Sumatera </option>
                            </select>
                            <select onchange="result(this.value,3)" id="select2" name="data[select2]" class="styled">
                              <option value="">-Kota-</option>
                              <option value="29">Bogor</option>
                              <option value="27">Jakarta</option>
                              <option value="36">Karawang</option>
                              <option value="37">Serang</option>
                            </select>
                            </div>
                            <span id="result" class="white_table">
                            <table cellpadding="0" cellspacing="0" border="0">
                              <tbody>
                                <tr>
                                  <td>Jakarta</td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">J&amp;L Telecom (Dunia Generasi Berlian) </div>
                                    ITC Roxi Mas Lantai 4, No. 28, Jakarta Pusat </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">PT. Davindo Pratama </div>
                                    Gedung Graraha Assuryaniyah, Jalan Kampung Melayu Kecil III No.27, Jakarta Selatan </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">PT. MBXL (Maju Bersama XL)</div>
                                    Jl. Kerajinan Raya no.26, RT 002 / 01 Kel Krukur Kec Taman Sari Jakarta Barat </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">PT. Oasis Telemedia Nusantara (Bio Telekomunikasi Bogor)</div>
                                    ITC Roxy Mas Lt.1 No.30 Jl. KH. Hasyim Ashari No.125   Gambir Jakarta Pusat DKI Jakarta Raya - 10150 </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">PT. Pelangi Dodiniven Sejati </div>
                                    Jl Raya Bogor No.19, Kios  B.1-2-3, Kelurahan Kramat Jati, Kecamatan Kramat Jati, Jakarta Timur 13510 </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">Satria Muda </div>
                                    Graha Cikokol, Jl. Jend. Sudirman No. 1N, Kota Tangerang (15117) Telp. 021 99411628. </td>
                                </tr>
                                <tr>
                                  <td><div class="title_area">Star - Comcell </div>
                                    ITC Roxy Mas Lt.1 no.59 Jl. KH. Hasyim Ashari 125, Cideng, Gambir, Jakarta Pusat 10150 </td>
                                </tr>
                              </tbody>
                            </table>
                            </span>

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