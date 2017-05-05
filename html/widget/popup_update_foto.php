<div class="popup" id="updateFoto">
    <div class="ui-overlay">
        <div class="ui-widget-overlay"></div>
    </div><!-- end .ui-overlay -->
    <div class="popupContent">
        <div class="entry">
            <h1>Photo Upload and Crop</h1>
            <div align="center">
                <img src="upload_pic/resize_1351570790.jpg" />
                <form name="thumbnail" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <input type="submit" name="upload_thumbnail" value="Save Thumbnail" id="save_thumb" />
                </form>
            </div>
        </div><!-- end .entry -->
    </div><!-- end .popupMessage -->
</div><!-- end .popup -->