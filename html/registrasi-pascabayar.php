<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a>Registrasi Pascabayar</a></h1>
</div><!-- end #breadcumb -->
<div id="container">
    <div class="wrapper" id="axisLife">
    	<div id="sidebar">
   			<?php include("widget/medium_banner.php"); ?>
        </div><!-- end #sidebar -->
        <div id="contents">
        	<div class="theTitle">
            	<h1 class="icon_register">Registrasi Pascabayar</h1>
            </div><!-- end .theTitle -->
            <div class="shadowCtop">
            	<div class="shadowCbottom">
                    <div class="entryDetail">
                    	
                            <div class="white_table">
                                  <h2>Kami mengerti betapa berharganya waktu kamu.</h2>
                                  <p>Untuk itu, kami juga menyediakan fasilitas registrasi online untuk AXIS Worry Free Pascabayar demi kenyamanan kamu dalam proses pendaftaran.<br />
                                    Isi form pendaftaran secara online sekarang dan datang ke AXIS Center setelahnya tanpa perlu lagi mengisi formulir fisik. Mempermudah hidupmu, menghemat waktumu.</p>
                                  <form accept-charset="utf-8" action="/Postpaid_OnlineRegistration" class="theForm" method="post" id="PostpaidRegistratorAddForm">
                                      <span class="headform">Personal Data</span>
                                      <div class="row">
                                        <label for="NamaLengkap">Nama Lengkap</label>
                                        <input type="text" />
                                      </div>
                                      <div class="row">
                                        <label for="JenisKelamin">Jenis Kelamin</label>
                                        <select id="PostpaidRegistratorGender" class="styled">
                                          <option value="">-pilih-</option>
                                          <option value="male">Wanita</option>
                                          <option value="female">Pria</option>
                                        </select>
                                      </div>
                                      <div class="row">
                                        <label for="date_of_birth">Tanggal Lahir</label>
                                        <input type="text" id="dateBirth" maxlength="255" class="dateBirth" value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="place_of_birth">Tempat Lahir</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="address">Alamat</label>
                                        <textarea value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';"></textarea>
                                      </div>
                                      <div class="row">
                                        <label for="rtrw">RT/ RW</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="kelurahankecamatan">Kelurahan/ Kecamatan</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="city">Kota</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="province">Provinsi</label>
                                        <select id="PostpaidRegistratorProvince" class="styled">
                                          <option value="">-Pilih-</option>
                                          <option value="Jabodetabek">Jabodetabek</option>
                                          <option value="Central Java">Central Java</option>
                                          <option value="East Java">East Java</option>
                                          <option value="West Java">West Java</option>
                                          <option value="Bali Lombok">Bali Lombok</option>
                                          <option value="North Sumatera">North Sumatera</option>
                                          <option value="West Sumatera">West Sumatera</option>
                                          <option value="Riau dan Kepulauan Riau">Riau dan Kepulauan Riau</option>
                                          <option value="Lainnya">Lainnya</option>
                                        </select>
                                      </div>
                                      <div class="row">
                                        <label for="phone">Nomor Telepon</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" class="wSmall" />
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" class="wMedium" />
                                      </div>
                                      <div class="row">
                                        <label for="mobile_number">Nomor Handphone</label>
                                        <input type="text"  value="Nama" onBlur="if(this.value=='')this.value='Nama';" onFocus="if(this.value=='Nama')this.value='';" />
                                      </div>
                                      <div class="row">
                                        <label for="religion">Agama</label>
                                        <input type="text" id="PostpaidRegistratorReligion" maxlength="255">
                                      </div>
                                      <div class="row">
                                        <label for="mother_name">Nama Ibu</label>
                                        <input type="text" id="PostpaidRegistratorMotherName" maxlength="255">
                                      </div>
                                      <div class="row">
                                        <label for="id_number">Nomor Identitas</label>
                                        <input type="text" id="PostpaidRegistratorIdNumber" maxlength="50">
                                      </div>
                                      <div class="row">
                                        <label for="id_card_type">Jenis Identitas</label>
                                        <select id="PostpaidRegistratorIdCardType" class="styled">
                                          <option value="">-Pilih-</option>
                                          <option value="KTP/KITAS">KTP/KITAS</option>
                                          <option value="SIM">SIM</option>
                                          <option value="PASSPORT">PASSPORT</option>
                                          <option value="KARTU PELAJAR">KARTU PELAJAR</option>
                                        </select>
                                      </div>
                                      <div class="row">
                                        <label for="npwp">Nomor NPWP</label>
                                        <input type="text" id="PostpaidRegistratorNpwp" maxlength="255">
                                      </div>
                                      <div class="row lastchild">
                                        <label for="email">Email</label>
                                        <input type="text" id="PostpaidRegistratorEmail" maxlength="50">
                                      </div>
                                      <span class="headform">Orang terdekat</span>
                                      <div class="row">
                                        <label for="contactable_person">Nama</label>
                                        <input type="text" id="PostpaidRegistratorContactablePerson" maxlength="50">
                                      </div>
                                      <div class="row">
                                        <label for="contactable_relation">Jenis Hubungan</label>
                                        <select id="PostpaidRegistratorContactableRelation" class="styled">
                                          <option value="">-PIlih-</option>
                                          <option value="Anak">Anak</option>
                                          <option value="Orang tua">Orang tua</option>
                                          <option value="Saudara kandung">Saudara kandung</option>
                                          <option value="Lainnya">Lainnya</option>
                                        </select>
                                      </div>
                                      <div class="row">
                                        <label for="contactable_address">Alamat</label>
                                        <textarea id="PostpaidRegistratorContactableAddress" maxlength="50" cols="34" rows="4" wrap="yes"></textarea>
                                      </div>
                                      <div class="row lastchild">
                                        <label for="contactable_phone">Nomor Telepon</label>
                                        <input type="text" id="PostpaidRegistratorContactablePhone" maxlength="50">
                                      </div>
                                      <span class="headform">Paket Tambahan</span>
                                      <div class="rowCheck">
                                        <label for="packed">Paket Basic Bulanan</label>
                                        <input type="hidden" value="" id="PostpaidRegistratorPacked_">
                                        <input type="radio" value="Basic" class="styled" id="PostpaidRegistratorPacked50000">
                                        <span class="radiovalue">50000</span>
                                        <input type="radio" value="Basic" class="styled" id="PostpaidRegistratorPacked100000">
                                        <span class="radiovalue">100000</span>
                                        <input type="radio" value="Basic" class="styled" id="PostpaidRegistratorPacked150000">
                                        <span class="radiovalue">150000</span> 
                                      </div>
                                      <div class="rowCheck lastchild">
                                        <label for="optionalpaket">Paket Tambahan Lainnya</label>
                                      <input type="checkbox" id="PostpaidRegistratorExtraPackedInternet" value="Internet" class="styled">
                                      <span>Internet</span>
                                      <input type="checkbox" id="PostpaidRegistratorExtraPackedSMS" value="SMS" class="styled">
                                      <span>SMS</span>
                                      <input type="checkbox" id="PostpaidRegistratorExtraPackedBlackBerry" value="BlackBerry" class="styled">
                                      <span>BlackBerry</span>
                                      </div>
                                      <span class="headform">Jenis Pembayaran</span>
                                      <div class="rowCheck lastchild">
                                        <input type="radio" value="Deposit" class="styled" id="PostpaidRegistratorPaymentDeposit">
                                        <span class="radiovalue">Deposit</span>
                                        <input type="radio" value="Auto debit kartu kredit" class="styled" id="PostpaidRegistratorPaymentAutoDebitKartuKredit">
                                        <span class="radiovalue">Auto debit kartu kredit</span>
                                        <input type="radio" value="Cash/Transfer" class="styled" id="PostpaidRegistratorPaymentCashTransfer">
                                        <span class="radiovalue">Cash/Transfer</span><br /><br />
                                        <p class="clear">Catatan: Untuk pembayaran dengan auto debet, mohon lampirkan Surat Kuasa Auto Debit </p>
                                      </div>
                                      <span class="headform">Informasi tagihan / pembayaran</span>
                                        <ul>
                                            <li>Penagihan akan dikirim melalui SMS setiap bulan</li>
                                            <li>Anda juga dapat memeriksa status penggunaan Anda kapan saja dengan menghubungi *100 #</li>
                                            <li>Atau, bisa juga dikirim ke alamat email Anda</li>
                                        </ul>
                                        <p>Dengan ini saya menyatakan, memahami dan menyetujui bahwa:</p>
                                        <ol>
                                            <li>Semua informasi pribadi yang saya berikan adalah akurat dan akuntabel.</li>
                                            <li> PT. Natrindo Telepon Selular telah menyediakan dan memberikan semua informasi yang berkaitan dengan Layanan Pascabayar AXIS.</li>
                                            <li>Dengan menandatangani formulir pendaftaran ini, maka berarti:
                                                <ul>
                                                    <li>Saya telah setuju untuk menerima efektivitas dari syarat dan ketentuan, yang dapat dimodifikasi secara parsial kapan saja oleh PT Natrindo Telepon Seluler.</li>
                                                    <li>Saya setuju untuk bertanggung jawab penuh atas setiap biaya dan beban yang timbul berkaitan dengan Layanan AXIS Pascabayar.</li>
                                                </ul>
                                            </li>
                                            <li>AXIS berhak sepenuhnya untuk menyetujui atau menolak aplikasi ini tanpa kewajiban untuk memberikan alasan.</li>
                                            <li>Deposit akan digunakan pada penagihan bulan ke-7.s</li>
                                        </ol>
                                      <input type="submit" value="SUBMIT" class="submit">
                                    </form>

                          </div><!-- end .white_table -->
                    </div><!-- end .entryDetail -->
                </div><!-- end .shadowCbottom -->
            </div><!-- end .shadowCtop -->
        </div><!-- end #contents -->
    </div><!-- end #axisLife -->
    <div class="widget-axisLife">
    <?php include("widget/carousel_banner.php"); ?>
    </div><!-- end .widget-whyAxis -->
</div><!-- end #container -->