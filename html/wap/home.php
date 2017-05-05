<div id="banner">
	<a href="#"><img src="images/banner.jpg" /></a>
</div>
<div id="searchForm">
    <form class="" action="index.php?menu=search" name="gotourl">
    <input type="text" value="Bisa dibantu? Cari di sini..." onBlur="if(this.value=='')this.value='Bisa dibantu? Cari di sini...';" onFocus="if(this.value=='Bisa dibantu? Cari di sini...')this.value='';"  />
    <input type="button" value="Search" onclick="url();" />
    </form>
	<script>
        var url;
        function url(){
        url = "index.php?menu=search";
        location.href = url;
        }
    </script>
</div>
<div id="navigation">
	<ul>
    	<li><a href="index.php?menu=pakai-axis">Pakai AXIS</a></li>
    	<li><a href="index.php?menu=category">Terbaik dari AXIS</a></li>
    	<li><a href="index.php?menu=category">Lagi Trend</a></li>
    	<li><a href="index.php?menu=axisku-category">AXISKU</a></li>
    	<li><a href="index.php?menu=ask">Ask AXIS</a></li>
    </ul>
</div>