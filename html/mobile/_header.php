<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	 
	<?php
		if( isset($META_TITLE)){
			echo '<title>'. $META_TITLE .'</title>';	
		}
		else{
			echo '<title>Axis - GSM Yang Baik</title>';
		}
	?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.2.0.min.css" /> 
	<link rel="stylesheet" href="assets/css/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="assets/css/jquery-theme/axis.min.css" />
	<link rel="stylesheet" href="assets/css/flexslider.css" />
	<link rel="stylesheet" href="assets/css/jquery.mobile.custom.css" />
	<link rel="stylesheet" href="assets/css/jquery.mobile.mq.css" />
	<link rel="stylesheet" href="assets/css/axismobile2012.css" />
	
	
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/js/jquery.mobile-1.2.0.min.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
</head> 

<?php
	// page ID
	if( !isset($PAGE_ID)){
		$PAGE_ID = 'page-home';	
	}
	
	// page Class
	if( !isset($PAGE_CLASS)){
		$PAGE_CLASS = '';	
	}
?>

<body> 

<div id="<?php echo $PAGE_ID; ?>" data-role="page" class="wrapper <?php echo $PAGE_CLASS; ?> container" data-theme="a">
	