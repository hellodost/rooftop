<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
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
                    <li><a class="act" href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('job-search'); ?>">Job search</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('post-resume'); ?>">Post resume</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('career'); ?>">Career services</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('myprofile'); ?>">My Profile</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('recruiter/signin'); ?>" class="none" target="_blank">Recruter's</a></li>
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
            <form action="<?php echo Yii::app()->createUrl("search/jobsearch"); ?>" method="get">
            <strong>Search Job</strong><input name="q" type="text" placeholder="Skill,Keword,Company name " class="fld" />
            <input name="search_btn" type="image" src="<?php echo Yii::app()->baseUrl; ?>/images/search.png" align="top" />
            <span><a href="<?php echo Yii::app()->createUrl('search/advance'); ?>">Advance search</a></span>
            </form>
        </div>
        <div class="joinus_con">
        	<?php if(isset(Yii::app()->user->front_user_id)) { echo 'Welcome <a href="' . Yii::app()->createUrl('user/myaccount') . '">' . ucfirst(Yii::app()->user->front_firstname) .'</a>, ' . $logoutUrl; ?>             
			<?php } else { ?>
             <a href="<?php echo Yii::app()->createUrl('user/signup'); ?>" id="try-1" class="btn-yellow">Join us</a>
             <a href="<?php echo Yii::app()->createUrl('user/signin'); ?>" id="try-2" class="btn-gray">Sign In</a>
            <?php } ?>
        </div>
        <div class="clear"></div>
       </div>
   </div>

	
   <!--end Search row-->

	<?php echo $content; ?>
   
   <!--footer-->
   <div class="footer_con">
   	<div class="footer">
   	  <div class="colum">
       	<div class="heading2">Job Seeker</div>
        <a href="<?php echo Yii::app()->createUrl(''); ?>">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
      </div>
      <div class="colum">
       	<div class="heading2">Top Cityes</div>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
      </div>
      <div class="colum">
       	<div class="heading2">Top Catergory</div>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
      </div>
      <div class="colum none">
       	<div class="heading2">Our Site</div>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
        <a href="#">Accounting Jobs</a>
      </div>
    </div>
    <div class="clear"></div>
   </div>
   <!--end footer-->
   
</div>




<?php
if(!isset(Yii::app()->user->front_user_id))
{
$ch = Yii::app()->clientScript;
$bu = Yii::app()->baseUrl;
$ch->registerScriptFile("$bu/js/jquery.lightbox_me.js",CClientScript::POS_HEAD);
$ch->registerScript('home','$(function() {
function launch() {
	 $(\'#sign_up, #sign_in\').lightbox_me({centered: true, onLoad: function() { $(\'#sign_up\').find(\'input:first\').focus()}});}

$(\'#try-1\').click(function(e) {
	$("#sign_in").lightbox_me({centered: true, onLoad: function() {
		$("#sign_in").find("input:first").focus();
	}});
	e.preventDefault();
});
$(\'#try-2\').click(function(e) {
	$("#sign_up").lightbox_me({centered: true, onLoad: function() {
		$("#sign_up").find("input:first").focus();
	}});
	e.preventDefault();
});

$(\'table tr:nth-child(even)\').addClass(\'stripe\');
});');
?>

<div id="sign_in" class="box_container">
    <h3 id="see_id" class="heading">Register new account</h3>
    <br />
    <div id="box_container_form" style="display:block; width:440px">
    
    	<form id="users-signup-form" action="<?php echo Yii::app()->createUrl("user/signup"); ?>" method="post" style="padding:0 20px">            
            <label for="User_fullname" class="req uired">Fullname <span class="required">*</span></label>
            <input name="name" class="fld2" id="name" type="text" placeholder="Fullname" />                        

			<label for="User_email" class="required">Email <span class="required">*</span></label>            
            <input name="email" class="fld2" id="email" type="text" placeholder="test@example.com" />                        
            
			<label for="User_password" class="required">Password <span class="required">*</span></label>
            <input name="password" class="fld2" id="password" type="password" placeholder="xxxxxx" />            			
            
			<label for="User_cpassword" class="required">Re Type Password <span class="required">*</span></label>            <input name="cpassword" class="fld2" id="cpassword" type="password" placeholder="xxxxxx" />            			
            
            <label for="User_cpassword" class="required">&nbsp;</label>
            <input id="ytrememberMe" type="hidden" value="0" name="rememberMe" /><input name="rememberMe" value="No" id="rememberMe" type="checkbox" /> Accepted <a href="/cms/site/recruiters-terms">Terms &amp; conditions</a>
            
            <div class="btn_con" style="padding:20px 0 0 0;">
                <input type="button" value="Cancel" name="Cancel" class="btn-gray close" />
            	<input type="submit" value="Submit" name="Signup" class="btn-blue" />
            	<div class="clear"></div>
            </div>
            
            </form> 
        
        <p>&nbsp;</p>
        <h3 id="see_id" align="center">Or</h3>
        <div align="center"><?php echo $loginUrl; ?></div>
        
    </div>
    <a id="close_x" class="close sprited" href="<?php echo Yii::app()->createUrl('user/close'); ?>">close</a>
</div>

<div id="sign_up" class="box_container">
    <h3 id="see_id" class="heading">Sign In</h3>
    <div id="box_container_form" style="display:block; width:440px;">
        <?php 
		$form=$this->beginWidget('CActiveForm', array(
			'id'=>'site-main-login-form',
			'action'=>Yii::app()->createUrl("user/signin"),
			//'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
			'htmlOptions'=>array(
				'style'=>'padding:0 20px',
			),
		)); 
		?>
    	<div>Please sign in using the form below</div>
        <br />
        <label>Email:</label>
        <input class="fld2" placeholder="test@example.com" name="LoginForm[username]" id="LoginForm_username" type="text" />
        
        <label>Password:</label>
        <input class="fld2" placeholder="xxxxxx" name="LoginForm[password]" id="LoginForm_password" type="password" />
         
        <?php //echo CHtml::submitButton('Signin', array("class"=>"btn-gray")); ?>
        
        <div class="btn_con" style="padding:20px 0 0 0;">
            <input type="button" value="Cancel" name="Cancel" class="btn-gray close" />
            <input type="submit" value="Submit" name="Signin" class="btn-blue" />
            <a href="<?php echo Yii::app()->createUrl('user/forgot'); ?>">Forgot Password?</a>
            <div class="clear"></div>
        </div>
        <?php $this->endWidget(); ?>
        <h3 id="see_id" align="center">Or</h3>
        <div align="center"><?php echo $loginUrl; ?></div>
        
     </div>   
    <a id="close_x" class="close sprited" href="<?php echo Yii::app()->createUrl('user/close'); ?>">close</a>

</div>

<?php
}
?>
</body>
</html>
