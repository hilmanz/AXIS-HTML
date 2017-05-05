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
                            <form accept-charset="utf-8" action="/prepaid__registrations/page2" method="post" id="inputuser" class="theForm">
                                <div class="row">
                                <label for="msisdn">Nomor AXIS</label>
                                <input type="text" maxlength="20" id="PrepaidRegistrationMsisdn" class="text" value="6283808932187" readonly="readonly" name="data[PrepaidRegistration][msisdn]">
                                </div>
                                <div class="row">                   
                                <label for="name">Nama</label>
                                <input type="text" id="PrepaidRegistrationName" class="text" name="data[PrepaidRegistration][name]">
                                </div>
                                <div class="row">  
                                <label for="id_type">Tipe ID</label>
                                <select id="PrepaidRegistrationIdType" class="styled" name="data[PrepaidRegistration][id_type]">
                                  <option value="">-Pilih-</option>
                                  <option value="1">SIM</option>
                                  <option value="4">KITAS</option>
                                  <option value="3">PASPOR</option>
                                  <option value="2">KTP</option>
                                  <option value="5">KARTU PELAJAR</option>
                                </select>
                                </div>
                                <div class="row">  
                                <label for="id_number">Nomor ID</label>
                                <input type="text" maxlength="50" id="PrepaidRegistrationIdNumber" class="text smalltext" name="data[PrepaidRegistration][id_number]">
                                </div>
                                <div class="row">  
                                <label for="email">Alamat Email</label>
                                <input type="text" maxlength="50" id="PrepaidRegistrationEmail" class="text" name="data[PrepaidRegistration][email]">
                                </div>
                                <div class="row">  
                                <label for="place_birth">Tempat Lahir</label>
                                <input type="text" maxlength="50" id="PrepaidRegistrationPlaceBirth" class="text smalltext" name="data[PrepaidRegistration][place_birth]">
                                </div>
                                <div class="row">  
                                <label for="date_birth">Tanggal Lahir</label>
								<input type="text" id="dateBirth" maxlength="255" class="dateBirth" value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                </div>
                                <div class="row">  
                                <label for="religion">Agama</label>
                                <select id="PrepaidRegistrationReligion" class="styled" name="data[PrepaidRegistration][religion]">
                                  <option value="">-Pilih-</option>
                                  <option value="B">BUDHA</option>
                                  <option value="C">KATOLIK</option>
                                  <option value="H">HINDU</option>
                                  <option value="M">ISLAM</option>
                                  <option value="R">PROTESTAN</option>
                                </select>
                                </div>
                                <div class="row">  
                                <label for="address">Alamat</label>
                                <textarea maxlength="50" cols="" rows="" wrap="no" id="PrepaidRegistrationAddress" class="textarea" name="data[PrepaidRegistration][address]"></textarea>
                                </div>
                                <div class="row">  
                                <label for="city">Kota / Propinsi</label>
                                <input type="text" maxlength="20" id="PrepaidRegistrationCity" class="text" name="data[PrepaidRegistration][city]">
                                </div>
                                <div class="row">  
                                <label for="zipcode">Kode Pos</label>
                                <input type="text" maxlength="10" id="PrepaidRegistrationZipcode" class="text smalltext" name="data[PrepaidRegistration][zipcode]">
                                </div>
                                <div class="row">  
                                <label for="alt_phone">Alternatif Telephone</label>
                                <input type="text" maxlength="20" id="PrepaidRegistrationAltPhone" class="text" name="data[PrepaidRegistration][alt_phone]">
                                </div>
                                <div class="row">
                                <label for="occupation">Pekerjaan</label>
                                <select id="PrepaidRegistrationOccupation" class="styled" name="data[PrepaidRegistration][occupation]">
                                  <option value="">-Pilih-</option>
                                  <option value="03">PEMILIK BISNIS</option>
                                  <option value="01">PNS / KARYAWAN PEMERINTAHAN</option>
                                  <option value="04">IBU RUMAH TANGGA</option>
                                  <option value="06">PEKERJA PARUH WAKTU / FREELANCE</option>
                                  <option value="02">KARYAWAN PRIVAT</option>
                                  <option value="05">PROFESIONAL</option>
                                  <option value="08">PENSIUNAN</option>
                                  <option value="09">PELAJAR</option>
                                  <option value="07">TIDAK BEKERJA</option>
                                  <option value="11">BURUH / PETANI</option>
                                  <option value="10">MAHASISWA</option>
                                </select>
                                </div>
                                <div class="row">  
                                <label for="hobby">Hobi</label>
                                <select id="PrepaidRegistrationHobby" class="styled" name="data[PrepaidRegistration][hobby]">
                                  <option value="">-Pilih-</option>
                                  <option value="09">CLUBBING</option>
                                  <option value="07">MEMASAK</option>
                                  <option value="10">MAKAN / CAFE</option>
                                  <option value="06">BERKEBUN</option>
                                  <option value="08">MENONTON FILM</option>
                                  <option value="04">MUSIK</option>
                                  <option value="11">FOTOGRAFI</option>
                                  <option value="05">MEMBACA</option>
                                  <option value="03">BELANJA / FASHION</option>
                                  <option value="01">BEROLAHRAGA</option>
                                  <option value="02">BERPLESIR</option>
                                </select>
                                </div>
                                <div class="row lastchild">  
                              <input type="submit" value="DAFTAR" class="submit9">
                                </div>
                            </form>
                    </div><!-- end .entryDetail -->
                </div><!-- end .shadowCbottom -->
            </div><!-- end .shadowCtop -->
        </div><!-- end #contents -->
    </div><!-- end #axisLife -->
    <div class="widget-axisLife">
    <?php include("widget/carousel_banner.php"); ?>
    </div><!-- end .widget-whyAxis -->
</div><!-- end #container -->