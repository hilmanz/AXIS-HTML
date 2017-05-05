<div id="headContainer">
    <div id="head">
        <div id="top">
            <a id="logo" href="index.php">&nbsp;</a>
            <ul id="topNav">
                <li><a href="index.php?menu=produk-kartu">Kartu Axis</a></li>
                <li><a href="index.php?menu=produk-internet">Internet</a></li>
                <li><a href="index.php?menu=coverage">Jangkauan</a></li>
                <li><a href="http://rbt.axisworld.co.id" target="_blank">AXIS Store</a></li>
                <li><a href="index.php?menu=isi-ulang">Isi Ulang</a></li>
                <li><a href="index.php?menu=customer-care">ASK AXIS</a></li>
            </ul><!-- end #topNav -->
            <?php  if($_GET['menu']=='axis-life-login'){ ?>
            <div id="loginBox">
            	<div class="thumbSmallUser"><a href="#"><img src="content/user/thumb/1.jpg" /></a></div>
                <span class="user-info">Hi, Asep Darusman</span>
              	<a href="#" class="logout">Logout</a>
            </div><!-- end #loginBox -->
            <?php  }else if($_GET['menu']=='axis-life-detail-login'){ ?>
            <div id="loginBox">
            	<div class="thumbSmallUser"><a href="#"><img src="content/user/thumb/1.jpg" /></a></div>
                <span class="user-info">Hi, Asep Darusman</span>
              	<a href="#" class="logout">Logout</a>
            </div><!-- end #loginBox -->
            <?php  }else if($_GET['menu']=='axis-life-submit-article'){ ?>
            <div id="loginBox">
            	<div class="thumbSmallUser"><a href="#"><img src="content/user/thumb/1.jpg" /></a></div>
                <span class="user-info">Hi, Asep Darusman</span>
              	<a href="#" class="logout">Logout</a>
            </div><!-- end #loginBox -->
		    <?php }else{  ?>
            <div id="loginBtn">
            	<div class="thumbNotLogin"></div>
                <span class="loginText">LOGIN :</span>
                <a class="loginFacebook showPopup" href="#teaserAxisLife">&nbsp;</a>
                <a class="loginTwitter showPopup" href="#teaserAxisLife">&nbsp;</a>
                <a class="loginGplus showPopup" href="#teaserAxisLife">&nbsp;</a>
            </div><!-- end #loginBtn -->
            	<div class="popup" id="teaserAxisLife">
                    <div class="ui-overlay">
                        <div class="ui-widget-overlay"></div>
                    </div><!-- end .ui-overlay -->
                    <div class="popupContent" style="width:650px;">
                        <div class="entry">
                         <img src="images/axis_life_teaser.jpg" />
                        </div><!-- end .entry -->
                    </div><!-- end .popupContent -->
                </div><!-- end .popup -->
           <?php  }?>
           <a class="flagen" href="#">EN</a>
           <a class="flagid" href="#">ID</a>
        </div><!-- end #top -->
        <div id="navigation">
            <div class="wrapper">
                <ul id="nav">
                    <li><a href="index.php?menu=kenapa-axis">Pakai AXIS</a></li>
                    <li><a href="index.php?menu=produk" class="submenu">Terbaik Dari AXIS</a></li>
                    <li><a href="index.php?menu=lagi-in">Lagi Trend</a></li>
                    <li><a href="index.php?menu=axis-life">AXISKU</a></li>
                </ul><!-- end #nav -->
                <div class="searchTop">
                    <form class="" action="index.php?menu=search-result" name="gotourl">
                    <input type="text" value="Bisa dibantu? Cari di sini..." onBlur="if(this.value=='')this.value='Bisa dibantu? Cari di sini...';" onFocus="if(this.value=='Bisa dibantu? Cari di sini...')this.value='';"  />
                    <input type="button" value="&nbsp;" onclick="url();" />
                    </form>
                </div><!-- end .searchTop -->
                <script>
					var url;
					function url(){
					url = "index.php?menu=search-result";
					location.href = url;
					}
				</script>
            </div><!-- end .wrapper -->
        </div><!-- end #navigation -->
    </div><!-- end #head -->
</div><!-- end #headContainer -->
<div id="subMenu">
    <div id="subContent" class="wrapper">
        <ul>
            <li><a href="index.php?menu=produk-internet" class="subInternet">Internet</a></li>
            <li><a href="index.php?menu=produk-telepon" class="subTelepon">Telepon &amp; SMS</a></li>
            <li><a href="index.php?menu=produk-bundling" class="subBundling">Paket Bundling</a></li>
            <li><a href="index.php?menu=produk-kartu" class="subKartu">Kartu Axis</a></li>
        </ul>
        <div class="bannerNav" id="internetBanner">
        	<p><img src="images/internet.png" /></p>
        </div>
        <div class="bannerNav" id="teleponBanner">
        	<p><img src="images/telpon_sms.png" /></p>
        </div>
        <div class="bannerNav" id="bundlingBanner">
        	<p><img src="images/bundling_device.png" /></p>
        </div>
        <div class="bannerNav" id="kartuBanner">
        	<p><img src="images/kartu_axis.png" /></p>
        </div>
    </div><!-- end .wrapper -->
</div>