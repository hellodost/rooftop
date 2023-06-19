<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
</head>
<body>
<div class="wra">
	<!--header-->
    <div class="header_O">
    	<div class="header">
        	<div class="logo"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" width="112" height="22" alt="Home" /></a></div>
          <div class="clear"></div>
      </div>
    </div>
   <!--end header--> 

   <?php echo $content; ?>
   
   <!--footer-->
   
   <div class="footer2">
   	<div class="footer_container">
   		<div class="copyright">Maxjip &copy; 2013. English (US)</div>
        <div class="footer_link">
     	<a href="<?php echo Yii::app()->createUrl('site/aboutus'); ?>">About</a> | 
        <a href="<?php echo Yii::app()->createUrl('site/privacy'); ?>">Privacy</a> | 
        <a href="<?php echo Yii::app()->createUrl('site/invite'); ?>">Invite</a>| 
        <a href="<?php echo Yii::app()->createUrl('site/terms'); ?>">Terms</a> | 
        <a href="<?php echo Yii::app()->createUrl('site/developer'); ?>">Developers</a>
     	</div>
        <div class="clear"></div>
    </div>
   </div>
   <!--end footer-->
   
</div>



</body>
</html>
