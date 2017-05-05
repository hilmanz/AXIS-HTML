
<div id="profileBox">
    <div id="profileBoxTab">
        <div class="headBox">
            <ul>
                <li><a href="#tab_profile">my profile</a></li>
                <li><a href="#tab_activity">my activity</a></li>
                <li><a href="#tab_setting">setting</a></li>
            </ul>
        </div><!-- end .headBox -->
        <div class="entryBox" id="tab_profile">
            <div class="thumbUser">
                <a href="#" class="thumbUsers"><img src="content/user/1.jpg" /></a>
                <div class="rates">
                    <img src="images/icon/stars.png" />
                    <img src="images/icon/stars.png" />
                    <img src="images/icon/stars.png" />
                    <img src="images/icon/stars.png" />
                    <img src="images/icon/stars.png" />
                </div><!-- end .rates -->
            </div><!-- end .thumbUser -->
            <div class="userDetail">
                <h4>Asep Darusman</h4>
                <p>Kapten</p>
                
                <h4>Nomor Axis:</h4>
                <p>0838123555</p>
                
                <h4>Sisa Pulsa:</h4>
                <p>Rp 15.000</p>
                
                <h4>Masa Berlaku:</h4>
                <p>12/12/2015</p>
            </div><!-- end .userDetail -->
            <div class="rowBtn">
                <a class="purpleBtn" href="index.php?menu=axis-life-submit-blog">Submit URL</a>
                <a class="purpleBtn" href="index.php?menu=axis-life-submit-article">Submit Article</a>
            </div><!-- end .rowBtn -->
        </div><!-- end #tab_profile -->
        <div class="entryBox" id="tab_activity">
            <div class="rowBtns">
                <a class="myFavoriteBtn" href="index.php?menu=my-favorite">My Favorite (23)</a>
                <a class="myArticleBtn" href="index.php?menu=my-article">My Articles (15)</a>
                <a class="komentarBtn" href="index.php?menu=my-comment">Comments (37)</a>
            </div><!-- end .rowBtns -->
        </div><!-- end #tab_activity -->
        <div class="entryBox" id="tab_setting">
            <div class="rowBtns">
                <a class="purpleBtn showPopup" href="#updateFoto">Update Photo</a>
                <a class="purpleBtn showPopup" href="#customizeThemes">Customize Themes</a>
                <a class="purpleBtn showPopup" href="#editUsername">Edit Username</a>
                <a class="purpleBtn showPopup" href="#changePassword">Change Password</a>
            </div><!-- end .rowBtns -->
        </div><!-- end #tab_setting -->
    </div><!-- end #profileBoxTab -->
    <div class="shadow"></div>
    <div class="splashBox2"></div>
</div><!-- end #profileBox -->
<?php include("popup_updateFoto.php"); ?>
<?php include("popup_customizeThemes.php"); ?>
<?php include("popup_editUsername.php"); ?>
<?php include("popup_changePassword.php"); ?>