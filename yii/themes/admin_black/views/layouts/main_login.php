<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 	 
	?>
<!DOCTYPE html>
<html>
	<head>
	        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>PraLax Infosoft :: ADMIN Panel </title>
	        <link type="text/css" href="<?php echo $baseUrl;?>/css/login.css" rel="stylesheet" />	
	       	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery-1.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/easyTooltip.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery-ui-1.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/superfish.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/custom.js"></script>
	</head>
	<body>
	<div id="container">
		<div class="logo">
			<h1><b style="color: whitesmoke;">Admin Panel</b></h1>
           
		</div>
		<?php echo  $content;?>
	</div>
	</body>
</html>