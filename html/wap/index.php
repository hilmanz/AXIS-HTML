<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AXIS - GSM YANG BAIK</title>
<link rel="stylesheet" type="text/css" href="css/axismobile.css" />
</head>

<body>
<div id="body">
    <?php include("header.php"); ?>
    <div id="container">
	<?php 
    if($_GET['menu']=='category'){
        include("category.php");
    }else if($_GET['menu']=='sub-category'){ 
        include("sub-category.php");
    }else if($_GET['menu']=='detail'){ 
        include("detail.php");
    }else if($_GET['menu']=='axisku-category'){ 
        include("axisku-category.php");
    }else if($_GET['menu']=='axisku-sub-category'){ 
        include("axisku-sub-category.php");
    }else if($_GET['menu']=='axisku-detail'){ 
        include("axisku-detail.php");
    }else if($_GET['menu']=='search'){ 
        include("search.php");
    }else if($_GET['menu']=='ask'){ 
        include("ask.php");
    }else if($_GET['menu']=='pakai-axis'){ 
        include("pakai-axis.php");
    }else{ 
        include("home.php");
    }?>
    </div><!-- end #container -->
</div><!-- end #body -->
 <?php include("footer.php"); ?>
</body>
</html>
