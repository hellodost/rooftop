
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/lightbox.css" rel="stylesheet" type="text/css" />
<title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
</head>
<body>
   
<div class="wra">
	<!--header-->
    <div class="header_O">
        	<div class="header">
        	<div class="logo"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" width="112" height="22" alt="Home" /></a></div>
            <div class="nav">
            	<ul>
                	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('jobs/postjobs'); ?>">Post a job</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('post-resume'); ?>">Posted jobs/ responses</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('career'); ?>">Sub users management</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('recruiter/profile'); ?>">Profile</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('myprofile'); ?>">Resume search</a></li>
                   
                    <li><a href="<?php echo Yii::app()->createUrl('recruiter/signin'); ?>" class="none">Billing & product info</a></li>
                </ul>
            </div>
          <div class="clear"></div>
      </div>
    </div>
   <!--end header--> 
   
   <!--Search row-->
    <div class="searh_row_con">
       <div class="searh_row">
        <div class="search_con">
            <strong>People Search</strong><input name="" type="text" placeholder="Skill,Keword,Company name " class="fld" />
            <input name="" type="image" src="<?php echo Yii::app()->baseUrl; ?>/images/search.png" align="top" />
            <span>Addvance search</span>
        </div>
        <div class="joinus_con">
             <img src="<?php echo Yii::app()->baseUrl; ?>/images/job_logo.png" alt="" width="60" height="60" class="mar_r" />
             Welcome<br />
          <a href="#"  class="bold">Blue.com</a>
        </div>
        <div class="clear"></div>
       </div>
    </div>
    <!--end Search row-->
 <div class="matter">
      
    
    
    <!--matter-->
   <div class="matter_con">
 <?php echo $content; ?>
        <div class="clear"></div>
   </div>
 </div> 
<!--end matter-->
    
    
    
    
   <!--end matter-->
   <!--footer-->
   <div class="footer2">
   		<div class="copyright">Maxjip &copy; 2013. English (US)</div>
        <div class="footer_link">
     	<a href="#">About</a> | 
        <a href="#">Privacy</a> | 
        <a href="#">Invite</a>| 
        <a href="#">Terms</a> | 
        <a href="#">Developers</a>
     </div>
        <div class="clear"></div>
   </div>
   <!--end footer-->
   
</div>



</body>
</html>
