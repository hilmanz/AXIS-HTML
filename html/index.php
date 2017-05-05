<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AXIS - GSM YANG BAIK</title>
<link rel="stylesheet" type="text/css" href="css/custom-theme/jquery-ui-1.9.0.custom.css">
<link rel="stylesheet" type="text/css" href="css/axis.css" />
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<link rel="stylesheet" type="text/css" href="css/jscrollpane.css" />
<link rel="stylesheet" type="text/css" href="css/scrollbar.css">
<link rel="stylesheet" href="js/mediaelementplayer.min.css" />
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
<script src="js/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/axis.js"></script>
</head>

<body>

<div class="popup" id="login">
    <div class="ui-overlay">
        <div class="ui-widget-overlay"></div>
    </div><!-- end .ui-overlay -->
    <div class="popupContent" id="loginForm">
        <div class="entry">
        	<form id="loginAxis">
            	<h3>LOGIN WITH AXIS</h3>
                <div class="row">
                	<label>Nomer Axis</label>
                    <input type="text" />
                </div>
                <div class="row">
                	<label>Password</label>
                    <input type="password" />
                </div>
                <div class="rowCheck">
                	<input type="checkbox" />
                    <label>remember me</label>
                    <a href="#" class="forgotBtn">Forgot Password</a>
                </div>
                <div class="rowBtn">
                	<input type="submit" value="&nbsp;" />
                    <div id="loginBtn">
                        <a class="loginFacebook" href="#">&nbsp;</a>
                        <a class="loginTwitter" href="#">&nbsp;</a>
                        <a class="loginGplus" href="#">&nbsp;</a>
                    </div><!-- end #loginBtn -->
                </div>
            </form>
        </div>
    </div><!-- end .popupMessage -->
</div><!-- end .popup -->
<div id="body">
    <?php include("header.php"); ?>
	<?php 
    if($_GET['menu']=='kenapa-axis'){
        include("kenapa-axis.php");
    }else if($_GET['menu']=='produk'){ 
        include("produk.php");
    }else if($_GET['menu']=='produk-internet'){ 
        include("produk-internet.php");
    }else if($_GET['menu']=='produk-telepon-internasional'){ 
        include("produk-telepon-internasional.php");
    }else if($_GET['menu']=='produk-telepon'){ 
        include("produk-telepon.php");
    }else if($_GET['menu']=='produk-bundling'){ 
        include("produk-bundling.php");
    }else if($_GET['menu']=='bundling-detail'){ 
        include("bundling-detail.php");
    }else if($_GET['menu']=='produk-kartu'){ 
        include("produk-kartu.php");
    }else if($_GET['menu']=='lagi-in'){ 
        include("lagi-in.php");
    }else if($_GET['menu']=='promo-detail'){ 
        include("promo-detail.php");
    }else if($_GET['menu']=='promo-detail2'){ 
        include("promo-detail2.php");
    }else if($_GET['menu']=='promo-roaming'){ 
        include("promo-roaming.php");
    }else if($_GET['menu']=='promo-blackberry-roaming'){ 
        include("promo-blackberry-roaming.php");
    }else if($_GET['menu']=='promo-haji'){ 
        include("promo-haji.php");
    }else if($_GET['menu']=='promo-sms'){ 
        include("promo-sms.php");
    }else if($_GET['menu']=='promo-sms-detail'){ 
        include("promo-sms-detail.php");
    }else if($_GET['menu']=='customer-care'){ 
        include("customer-care.php");
    }else if($_GET['menu']=='coverage'){ 
        include("coverage.php");
    }else if($_GET['menu']=='isi-ulang'){ 
        include("isi-ulang.php");
    }else if($_GET['menu']=='cekpulsa-isiulang'){ 
        include("cekpulsa-isiulang.php");
    }else if($_GET['menu']=='online-store'){ 
        include("online-store.php");
    }else if($_GET['menu']=='online-store-detail'){ 
        include("online-store-detail.php");
    }else if($_GET['menu']=='axis-life'){ 
        include("axis-life.php");
    }else if($_GET['menu']=='axis-life-open'){ 
        include("axis-life_old.php");
    }else if($_GET['menu']=='axis-life-detail'){ 
        include("axis-life-detail.php");
    }else if($_GET['menu']=='axis-life-login'){ 
        include("axis-life-login.php");
    }else if($_GET['menu']=='axis-life-submit-article'){ 
        include("axis-life-submit-article.php");
    }else if($_GET['menu']=='axis-life-submit-blog'){ 
        include("axis-life-submit-blog.php");
    }else if($_GET['menu']=='axis-life-detail-login'){ 
        include("axis-life-detail-login.php");
    }else if($_GET['menu']=='my-favorite'){ 
        include("my-favorite.php");
    }else if($_GET['menu']=='my-article'){ 
        include("my-article.php");
    }else if($_GET['menu']=='my-comment'){ 
        include("my-comment.php");
    }else if($_GET['menu']=='bantuan'){ 
        include("bantuan.php");
    }else if($_GET['menu']=='yang-asik'){ 
        include("yang-asik.php");
    }else if($_GET['menu']=='search-result'){ 
        include("search-result.php");
    }else if($_GET['menu']=='search-result-notfound'){ 
        include("search-result-notfound.php");
    }else if($_GET['menu']=='international'){ 
        include("international.php");
    }else if($_GET['menu']=='penyangkalan'){ 
        include("penyangkalan.php");
    }else if($_GET['menu']=='syarat-ketentuan'){ 
        include("syarat-ketentuan.php");
    }else if($_GET['menu']=='registrasi-prabayar'){ 
        include("registrasi-prabayar.php");
    }else if($_GET['menu']=='registrasi-prabayar-form'){ 
        include("registrasi-prabayar-form.php");
    }else if($_GET['menu']=='registrasi-pascabayar'){ 
        include("registrasi-pascabayar.php");
    }else if($_GET['menu']=='download'){ 
        include("download.php");
    }else if($_GET['menu']=='sitemap'){ 
        include("sitemap.php");
    }else if($_GET['menu']=='thewinner'){ 
        include("thewinner.php");
    }else{ 
        include("home.php");
    }?>
    <?php include("footer.php"); ?>
</div><!-- end #body -->
</body>
</html>
