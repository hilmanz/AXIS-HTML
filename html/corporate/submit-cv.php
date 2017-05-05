<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a href="index.php?menu=life-in-axis">Life In Axis</a> &raquo; <a >Karir</a></h1>
</div><!-- end #breadcumb -->
<div id="container">
    <div class="wrapper" id="theContent">
        <div class="theTitle">
            <h1>Life In Axis</h1>
        </div><!-- end .theTitle -->
    	<div id="sidebar">
            <div class="theBox">
                <div class="headBox">
                    <h1>Peluang karir lainnya</h1>
                </div><!-- end .headBox -->
                <div class="entryBox">
                    <div class="rowBtns">
                        <a class="purpleBtn current" href="index.php?menu=karir-detail"> Manager, Business Analyst </a>   
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive, Marketing Research </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Manager, Digital Public Relation </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive Modern Telco &amp; Device Bundling Development </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Manager Productivity &amp; Mobile Ads. </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive, End to End Data QoS </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive End to End Voice &amp; Vas QoS </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Senior Manager, Pricing </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> CRM Analyst Executive </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Segment Manager </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Manager, Business Analyst   (Finance) </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive Finance AR </a>  
                        <a class="purpleBtn" href="index.php?menu=karir-detail"> Executive, CRM Analyst </a> 
                    </div><!-- end .rowBtns -->
                </div><!-- end .entryBox -->
                <div class="shadow"></div>
            </div><!-- end .theBox -->
            <?php include("widget/recent_blog.php"); ?>
        </div><!-- end #sidebar -->
        <div id="contents">
            <div class="entryDetail">
                <div class="entry">
                    <div class="entry-title">
                         <h1>Kirim CV</h1>
                    </div><!-- end .entry-title -->
                    <div class="entry-post white_table">
                        <h2>Apakah kamu masih belum menemukan posisi yang kamu inginkan?</h2>
                        <p>Masukkan CV kamu di dalam kotak di bawah ini. (Ukuran dokumen tidak lebih dari 200 KB) </p>
                        <form accept-charset="utf-8" action="/SubmitCV" method="post" id="UserApplicationIndexForm" class="theForm" enctype="multipart/form-data">
                          <p> <strong>Penamaan file:</strong> CV_(Nama Lengkap)_(Posisi yang diinginkan)_(Tanggal)<br>
                            <i><strong>Contoh:</strong> CV_Murrytania Rehulina_Marketing Communication_23082011</i> </p>
                          <div class="row">
                          <select id="UserApplicationPosition" class="styled" onchange="select(this.value,2)" name="data[UserApplication][position]">
                            <option value="">Pilih Posisi</option>
                            <option value="Technology">Technology</option>
                            <option value="Marketing">Marketing</option>
                            <option value="SalesDistribution">Sales Distribution</option>
                            <option value="Finance">Finance</option>
                            <option value="HRCommunication">HR &amp; Communication</option>
                            <option value="others">Others</option>
                          </select>
                          </div>
                          <div class="row">
                            <input type="file" size="30">
                          </div>
                          <div class="row">
                          <input type="submit" class="submit" value="SUBMIT">
                          </div>
                        </form><br /><br />
                        <p>Hubungi kami di:<br>
                          <strong>PT AXIS Telekom Indonesia</strong><br>
                          Divisi HR and Communications<br>
                          Menara AXIS<br>
                          Kawasan Mega Kuningan<br>
                          Jl. Mega Kuningan Barat Kav. E4.3 No.2<br>
                          Jakarta 12950, Indonesia<br>
                          T: (+62) 21 576 0880<br>
                          F: (+62) 21 576 0810 </p>
                    </div><!-- end .entry-post -->
                </div><!-- end .entry -->
            </div><!-- end .entryDetail -->
        </div><!-- end #contents -->
    </div><!-- end #axisLife -->
</div><!-- end #container -->