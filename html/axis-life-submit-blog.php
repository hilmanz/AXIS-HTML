<div id="breadcumb" class="wrapper">
	<h1><a href="index.php">Home</a> &raquo; <a href="index.php?menu=axis-life">AXISKU</a> &raquo; <a href="index.php?menu=axis-life-submit-article">Submit Article</a></h1>
</div><!-- end #breadcumb -->
<div id="container">
    <div class="wrapper" id="axisLife">
    	<div id="sidebar">
   			<?php include("widget/profile_box.php"); ?>
   			 <?php include("widget/social_network.php"); ?>
        </div><!-- end #sidebar -->
        <div id="contents">
        	<div class="theTitle">
            	<h1 class="icon_artikel">Submit Artikel</h1>
            </div><!-- end .theTitle -->
            <div class="shadowCtop">
            	<div class="shadowCbottom">
                    <div class="entryDetail">
                    	<form id="submitArticleForm">
                        	<div class="row">
                            	<label>Alamat Artikel</label>
                                <input type="text" />
                            </div>
                        	<div class="row">
                            	<label>Kategori</label>
                                <select class="styled"/>
                                    <option>Teknologi</option>
                                    <option>Film</option>
                                    <option>Musik</option>
                                    <option>Seleb</option>
                                </select>
                            </div>
                        	<div class="row">
                            	<label>Tag</label>
                                <input type="text" />
                            </div>
                        	<div class="row">
                            	<label>Rating</label>
                                <div class="rate">
                                    <img src="images/icon/stars.png" />
                                    <img src="images/icon/stars.png" />
                                    <img src="images/icon/stars.png" />
                                    <img src="images/icon/stars.png" />
                                    <img src="images/icon/stars.png" />
                                </div><!-- end .rates -->
                            </div>
                        	<div class="row">
                            	<label>Komentar</label>
                                <textarea></textarea>
                            </div>
                        	<div class="rowShare">
                            	<span class="shareIcon">Share</span>
                                <input type="checkbox" class="styled"/>
                                <label>TWITTER</label>
                                <input type="checkbox" class="styled"/>
                                <label>FACEBOOK</label>
                                <input type="checkbox" class="styled"/>
                                <label>GOOGLE +</label>
                            </div>
                            <div class="rowSubmit">
                                <input type="checkbox" class="styled"/>
                            	<label>Saya setuju dengan <a href="#">syarat & ketentuan</a></label>
                                <input type="submit" value="SUBMIT" />
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