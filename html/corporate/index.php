<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AXIS - GSM YANG BAIK</title>
<link rel="stylesheet" type="text/css" href="css/custom-theme/jquery-ui-1.9.0.custom.css">
<link rel="stylesheet" type="text/css" href="css/axis.css" />
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<link rel="stylesheet" type="text/css" href="css/jscrollpane.css" />
<link rel="stylesheet" type="text/css" href="css/scrollbar.css">
<noscript>
    <link rel="stylesheet" type="text/css" href="css/nojs.css" />
</noscript>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/scroll-startstop.events.jquery.js"></script>
<script type="text/javascript" src="js/detectBrowser.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="js/customform.js"></script>
<script type="text/javascript" src="js/jRating.jquery.js"></script>
<script type="text/javascript" src="js/axis.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>

<body>
<div id="body">
    <?php include("header.php"); ?>
	<?php 
    if($_GET['menu']=='tentang-axis'){
        include("tentang-axis.php");
    }else if($_GET['menu']=='tanggung-jawab'){ 
        include("tanggung-jawab.php");
    }else if($_GET['menu']=='media-siaran-pers'){ 
        include("media-siaran-pers.php");
    }else if($_GET['menu']=='kualitas-layanan'){ 
        include("kualitas-layanan.php");
    }else if($_GET['menu']=='karyawan'){ 
        include("karyawan.php");
    }else if($_GET['menu']=='grup-kami'){ 
        include("grup-kami.php");
    }else if($_GET['menu']=='life-in-axis'){ 
        include("life-in-axis.php");
    }else if($_GET['menu']=='peranan-divisi'){ 
        include("peranan-divisi.php");
    }else if($_GET['menu']=='karir'){ 
        include("karir.php");
    }else if($_GET['menu']=='galeri'){ 
        include("galeri.php");
    }else if($_GET['menu']=='karir-detail'){ 
        include("karir-detail.php");
    }else if($_GET['menu']=='submit-cv'){ 
        include("submit-cv.php");
    }else if($_GET['menu']=='kegiatan-ekstrakurikuler'){ 
        include("kegiatan-ekstrakurikuler.php");
    }else if($_GET['menu']=='meet-our-people'){ 
        include("meet-our-people.php");
    }else if($_GET['menu']=='blog'){ 
        include("blog.php");
    }else if($_GET['menu']=='berita'){ 
        include("berita.php");
    }else if($_GET['menu']=='relasi'){ 
        include("relasi.php");
    }else if($_GET['menu']=='seputar-perusahaan'){ 
        include("seputar-perusahaan.php");
    }else if($_GET['menu']=='lembar-fakta'){ 
        include("lembar-fakta.php");
    }else if($_GET['menu']=='award'){ 
        include("award.php");
    }else if($_GET['menu']=='interkoneksi'){ 
        include("interkoneksi.php");
    }else if($_GET['menu']=='hubungi-kami'){ 
        include("hubungi-kami.php");
    }else if($_GET['menu']=='distributor-resmi'){ 
        include("distributor-resmi.php");
    }else{ 
        include("home.php");
    }?>
    <?php include("footer.php"); ?>
</div><!-- end #body -->
</body>
</html>
