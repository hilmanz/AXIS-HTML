<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>12/12/12</title>
<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
<link rel="stylesheet" type="text/css" href="css/axisteaser.css" />

<body>
<div id="body">
    <div id="banner">
    	<img src="images/banner_teaser.jpg" />
    </div>
    <div class="socialLike">
        <div class="facebookLike">
        	<div id="fb-root"></div>
			<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=160089394136722";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-href="http://axisworld.co.id/" data-send="true" data-layout="button_count" data-width="180" data-show-faces="false"></div>
        </div><!-- end .facebookLike -->
    </div><!-- end .socialLike -->
	<div id="countdown">
		<div id="countdown_dashboard">
            <div class="dash hours_dash">
                <div class="digit">0</div>
                <div class="digit">0</div>
            </div>
            <span class="space">:</span>
            <div class="dash minutes_dash">
                <div class="digit">0</div>
                <div class="digit">0</div>
            </div>
            <span class="space">:</span>
            <div class="dash seconds_dash">
                <div class="digit">0</div>
                <div class="digit">0</div>
            </div>
		</div>
        <div class="messageTeaser">
        	<div class="counter">
        		<h2>Tinggal menghitung jam, menit dan detik.<br />Sudah siap dengan apa yang akan terjadi?</h2>
            </div>
            <div class="finished">
        		<h2>Akhirnya hari yang ditunggu datang.<br />Sudah siap dengan apa yang akan terjadi?</h2>
            </div>
        </div>
	</div><!-- end #countdown -->
    <div class="rowBtn">
            <a class=" hitcounter" idtype="0" >Klik di sini untuk tahu apa yang terjadi</a>
    </div>
    <div class="rssRamalan">
        <h2 class="icon_ask">Beberapa link terkait tentang ramalan 2012:</h2>
        <ul>
            <li><a href="http://bukanmistik.blogspot.com/2009/10/kata-mereka-tentang-2012.html" target="_blank">Apa Maksud "Angka Benturan" 12-12-12?</a></li>
            <li><a href="http://terselubung.blogspot.com/2009/12/ramalan-kiamat-suku-hopi.html">Pergantian "Dunia Kelima" Pada 12-12-12	</a></li>
            <li><a href="http://www.forumsains.com/astronomi-dan-kosmologi/planet-x-pada-ramalan-kiamat-2012-bukan-planet-nibiru/" target="_blank">
            Ramalan 2012: Planet X Bukan Planet Nibiru</a></li>
            <li><a href="http://id.wikipedia.org/wiki/Prediksi_Kiamat_2012" target="_blank">Beberapa Versi Ramalan Akhir Zaman 2012	</a></li>
            <li><a href="http://teknologi.news.viva.co.id/news/read/355736-ahli-ingatkan-soal-isu--kiamat--21-desember-2012" target="_blank">Ahli Ingatkan Soal Isu Seputar 21 Desember 2012</a></li>
            <li><a href="http://www.kaskus.co.id/post/000000000000000723507251#post000000000000000723507251" target="_blank">Prediksi Tentang 2012 Oleh Anak-Anak Indigo	</a></li>
            <li><a href="http://teknologi.news.viva.co.id/news/read/321396-kaitan-transit-venus-dengan-kiamat-2012" target="_blank">Kaitan Transit Venus Dengan Ramalan 2012</a></li>
            <li><a href="http://axisworld.co.id/" target="_blank">Lahirnya "Dunia Baru" di Tanggal 12-12-12 </a></li>
            <li><a href="http://axisworld.co.id/" target="_blank">Kejutan 12-12-12 di Indonesia</a></li>
            <li><a href="http://axisworld.co.id/" target="_blank">Apa Makna "Cantik" di Balik Angka Cantik 12-12-12?</a></li>
        </ul>
    </div>
    <div class="popup" id="splash">
    	<a class="prev" href="#">&nbsp;</a>
        <a class="next" href="#">&nbsp;</a>
    	<div class="popupContent">
        	<a href="http://axisworld.co.id/" target="_blank"><img src="images/Fitur1.jpg" />
        </div>
    </div>
    <div class="popup" id="splash2">
    	<a class="prev" href="#">&nbsp;</a>
        <a class="next" href="#">&nbsp;</a>
    	<div class="popupContent">
        	<a href="http://axisworld.co.id/" target="_blank"><img src="images/Fitur2.jpg" />
        </div>
    </div>
    <div id="bgpopup"></div>
		<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				// Countdown
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		12,
						'month': 	12,
						'year': 	2012,
						'hour': 	12,
						'min': 		12,
						'sec': 		12
					},
					omitWeeks: true,
					onComplete: function() 
					{ 
						$('.counter').hide(1000);
						$('.finished').show(1000);
						$('.hitcounter').addClass('showPopup');
					}
				});
				jQuery(".showPopup,.prev").click(function(){
					jQuery(".popup").fadeOut();
					jQuery("#splash").fadeIn();
					jQuery("#bgpopup").fadeIn();
					return false;
				});
				jQuery(".next").click(function(){
					jQuery(".popup").fadeOut();
					jQuery("#splash2").fadeIn();
					jQuery("#bgpopup").fadeIn();
					return false;
				});
				jQuery("#bgpopup").click(function(){
					jQuery(".popup").fadeOut();
					jQuery("#bgpopup").fadeOut();
					return false;
				});
				
				$('.hitcounter').click(function() {
					var type = $(this).attr('idtype');
					var count = $('.count_'+type).attr('count');
					
						$.post('index.php',{type:type,act:'hitcounter'},function(data){
							if(data){
									count++;	
									$('.count_'+type).html(count);
									$('.count_'+type).attr('count',count);
							}else return false;
							
							
						},"json");
				
				});
				
			});
		</script>
</div><!-- end #body -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-867847-43']);
  _gaq.push(['_setDomainName', 'duabelasduabelas.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
